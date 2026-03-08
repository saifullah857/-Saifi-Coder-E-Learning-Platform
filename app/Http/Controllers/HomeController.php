<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Booking;
use Carbon\Carbon;
use App\Models\Contact;



class HomeController extends Controller
{
   public function enroll($id){
     $course=Course::find($id);
     return view('home.enroll',compact('course'));
   }

   public function about(){
    return view('home.about');
   }

  

public function course_link()
{
    $courses = Course::all(); // fetch all courses
    return view('home.course_link', compact('courses'));
}


   public function team_link(){
    return view('home.team_link');
   }

   public function test_link(){
    return view('home.test_link');
   }

   public function contact_link(){
    return view('home.contact_link');
   }

   public function instructer(){
    return view('home.instructer');
   }


  public function submit_enroll(Request $request, $course_id)
{
    // Find the course
    $course = Course::find($course_id);
    if (! $course) {
        return redirect()->back()->with('error', 'Course not found.');
    }

    // Validate input
    $request->validate([
        'name'   => 'required|string|max:255',
        'email'  => 'required|email|max:255',
        'phone'  => 'required|string|max:20',
        'payment_id' => 'nullable|string|max:255',
        'course_price' => 'nullable|numeric',
        'last_date' => 'required|date',
        'image'  => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4096',
    ]);

    // Check last date (no enroll if passed)
    $today = Carbon::now()->startOfDay();
    $lastDate = Carbon::parse($request->input('last_date'))->startOfDay();

    if ($today->gt($lastDate)) {
        return redirect()->back()->with('error', '⛔ Enrollment closed. Last date was ' . $lastDate->toDateString());
    }

    // Create booking
    $booking = new Booking();
    $booking->course_id = $course_id;
    $booking->name = $request->name;
    $booking->email = $request->email;
    $booking->phone = $request->phone;
    $booking->payment_id = $request->payment_id ?? null;
    $booking->course_price = $request->course_price ?? 0;
    $booking->enrollment_date = Carbon::now()->toDateString();
    $booking->last_date = $lastDate->toDateString();

    // Handle image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $file->move(public_path('course'), $filename);
        $booking->image = $filename;
    }

    $booking->save();

    return redirect()->back()->with('success', '✅ Enrollment submitted successfully!');
}


public function contact(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Contact::create([
        'name'    => $request->name,
        'email'   => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('message', 'Message Sent Successfully!');
}
}
