<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">

    @include('admin.head')
    <style>
        .form-card {
            max-width: 700px;
            margin: 40px auto;
            padding: 30px;
            background: #242323;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
        }
        .form-card h1 {
            font-size: 28px;
            font-weight: bold;
            color: #f55c5c;
            margin-bottom: 25px;
        }
        .form-label {
            font-weight: 600;
        }
        .current-img {
            border-radius: 8px;
            margin: 10px 0;
            box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="form-card">
              <h1 class="text-center">Update Course</h1>

              <form action="{{ url('edit_course', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label class="form-label">Course Title</label>
                  <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Rating</label>
                  <input type="text" name="rating" class="form-control" value="{{ $data->rating }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Learners Count</label>
                  <input type="text" name="learners_count" class="form-control" value="{{ $data->learners_count }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Level</label>
                  <select name="level" class="form-select">
                    <option value="{{ $data->level }}" selected>{{ $data->level }}</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Duration (hours)</label>
                  <input type="text" name="duration" class="form-control" value="{{ $data->duration }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Price</label>
                  <input type="number" name="price" class="form-control" value="{{ $data->price }}">
                </div>

                <div class="mb-3">
                  <label class="form-label">Type</label>
                  <select name="is_free" class="form-select">
                    <option value="{{ $data->is_free }}" selected>{{ $data->is_free }}</option>
                    <option value="Free">Free</option>
                    <option value="Paid">Paid</option>
                  </select>
                </div>

                <div class="mb-3 text-center">
                  <label class="form-label d-block">Current Image</label>
                  <img src="{{ asset('course/'.$data->image) }}" alt="Course Image" width="120" class="current-img">
                </div>

                <div class="mb-3">
                  <label class="form-label">Upload New Image</label>
                  <input type="file" name="image" class="form-control">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary px-4">Update Course</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
