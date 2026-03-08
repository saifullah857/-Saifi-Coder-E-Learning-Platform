<!DOCTYPE html>
<html>
  <head> 
    @include('admin.head')
    <style>
      .table-container {
        margin-top: 40px;
      }
      .course-img {
        border-radius: 8px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="table-container">
              <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                  <h3 class="mb-0">Manage Courses</h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-hover table-striped align-middle text-center">
                    <thead class="table-dark">
                      <tr>
                        <th>Course Title</th>
                        <th>Rating</th>
                        <th>Learners</th>
                        <th>Level</th>
                        <th>Duration</th>
                        <th>Price (Rs)</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $course)
                        <tr>
                          <td>{{ $course->title }}</td>
                          <td><span class="">{{ $course->rating }}</span></td>
                          <td>{{ $course->learners_count }}</td>
                          <td>{{ $course->level }}</td>
                          <td>{{ $course->duration }}</td>
                          <td><strong>{{ $course->price }}</strong></td>
                          <td>
    @if(strtolower($course->is_free) === 'free')
        <span class="">Free</span>
    @else
        <span class="">Paid</span>
    @endif
                          <td>
                            <img width="100" src="{{ asset('course/'.$course->image) }}" alt="Course Image" class="course-img">
                          </td>
                          <td>
                            <a onclick="return confirm('Are you sure you want to delete this course?')" 
                               class="btn btn-sm btn-danger" 
                               href="{{ url('course_delete', $course->id) }}">
                              Delete
                            </a>
                          </td>
                          <td>
                            <a class="btn btn-sm btn-warning" href="{{ url('course_update',$course->id) }}">
                              Update
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      @include('admin.footer')
  </body>
</html>
