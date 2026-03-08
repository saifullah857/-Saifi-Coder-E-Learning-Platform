<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Instructor;
use App\Notifications\SendEmailNotification;
use Notification;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function home()
{
    $course = Course::all();        // fetch all courses
    $categories = Category::all();  // fetch all categories

    return view('home.index', compact('course', 'categories'));
}
   public function course_page(){
      return view('admin.course_page');
   }

   public function add_course(Request $request)
    {
   
            $data=new Course;

    $data->title = $request->title;
    $data->rating = $request->rating;
    $data->learners_count = $request->learners_count;
    $data->level = $request->level;
    $data->duration = $request->duration;
    $data->price = $request->price;
    $data->is_free = $request->is_free;
    $image=$request->image;
    if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('course',$imagename);
        $data->image=$imagename;
    }

    $data->save();
    return redirect()->back();
    }

    public function view_course(){
    $data=Course::all();
    return view('admin.view_course',compact('data'));
   }

   

   public function course_delete($id){
    $data=Course::find($id);
    $data->delete();
    return redirect()->back();
    
   }

   public function course_update($id){
    $data=Course::find($id);

    return view('admin.course_update',compact('data'));
   }

 public function edit_course(Request $request, $id)
{
    $data = Course::findOrFail($id);

    $data->title = $request->title;
    $data->rating = $request->rating;
    $data->learners_count = $request->learners_count;
    $data->level = $request->level;
    $data->duration = $request->duration;
    $data->price = $request->price;
    $data->is_free = $request->is_free;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('course'), $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect()->back()->with('success', 'Course updated successfully!');
}

public function enrollment(){

$data=Booking::all();

    return view('admin.enrollment',compact('data'));
}

public function delete_enrollment($id){
    $data=Booking::find($id);
   $data->delete();
   return redirect()->back();

}

public function approve_enrollment($id){
    $booking = Booking::find($id);

    if ($booking) {
        $booking->status = 'approve';
        $booking->save(); // یہ لائن لازمی ہے
    }

    return redirect()->back()->with('message', 'Booking Approved Successfully');
}

public function reject_enrollment($id){
    $booking = Booking::find($id);

    if ($booking) {
        $booking->status = 'rejected';
        $booking->save();
    }

    return redirect()->back()->with('message', 'Booking Rejected Successfully');
}
public function view_category(){
    $category=Category::all();
    return view('admin.view_category',compact('category'));
}

public function upload_category(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $data = new Category;
    $data->name = $request->name;

    if ($request->hasFile('image')) {
        $imagename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('course'), $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect()->back()->with('message', 'Category added successfully!');
}

public function delete_category($id)
{
    $category = Category::find($id);

    if ($category) {
        // Delete image file if exists
        if ($category->image && file_exists(public_path('course/'.$category->image))) {
            unlink(public_path('course/'.$category->image));
        }

        $category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully!');
    }

    return redirect()->back()->with('message', 'Category not found!');
}

public function all_messages(){
     $contact = Contact::all();
    return view ('admin.all_messages',compact('contact'));

}


public function delete_email($id){
    $data=Contact::find($id);
    $data->delete();
    return redirect()->back();
    
   }

   public function send_email($id){
   $data = Contact::find($id);
    return view('admin.send_email',compact('data'));

}

public function instructerdata(Request $request)
    {
        $data = new Instructor();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->degree=$request->degree;
        $data->subject=$request->subject;
        $data->address=$request->address;
        $data->terms_accepted=$request->terms;
        $data->terms_accepted = $request->terms ? true : false; 
    $data->save();

    return redirect()->back()->with('success', 'Instructor registered successfully!');
}

public function instructer_appointment()
{
    $instructors = Instructor::all(); // use correct spelling
    return view('admin.instructer_appointment', compact('instructors'));
}

public function send_emailtoinstructer($id){
   $data = Instructor::find($id);
    return view('admin.send_emailtoinstructer',compact('data'));

}

public function approve_instructer($id)
{
    $instructor = Instructor::find($id);
    $instructor->status='approve';
    $instructor->save();
    return redirect()->back();

    
}

public function reject_instructer($id)
{
    $instructor = Instructor::find($id);
    $instructor->status='rejected';
    $instructor->save();
    return redirect()->back();

    
}

public function delete_emailofinstructer($id){
    $data=Instructor::find($id);
    $data->delete();
    return redirect()->back();
    
   }
  
   public function mail(Request $request,$id)
   {
    $data=Contact::find($id);

    $details = [
        'greeting'   => $request->greeting,
        'body'       => $request->body,
        'actiontext' => $request->actiontext,
        'actionurl'  => $request->actionurl,
        'endline'    => $request->endline,
    ];

    Notification::send($data,new SendEmailNotification($details));
    return redirect()->back();

   }

   
public function enroll_status()
{
    $data = Booking::where('email', Auth::user()->email)->get();
    return view('profile.enroll_status', compact('data'));
}

public function instructer_status()
{
    $instructors = Instructor::where('email', Auth::user()->email)->get();
    return view('profile.instructer_status', compact('instructors'));
}
}
