<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-8">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Add New Course</h4>
            </div>
            <div class="card-body p-4">

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Add Course Form --}}
                <form action="{{ route('add_course') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter course title" required>
                    </div>

                    <!-- Rating -->
                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <input type="number" step="0.01" name="rating" class="form-control" placeholder="e.g. 4.5">
                    </div>

                    <!-- Learners Count -->
                    <div class="mb-3">
                        <label class="form-label">Learners Count</label>
                        <input type="text" name="learners_count" class="form-control" placeholder="e.g. 1.3L+">
                    </div>

                    <!-- Level -->
                    <div class="mb-3">
                        <label for="level" class="form-label fw-bold">Course Level</label>
                        <select name="level" id="level" class="form-select border-primary shadow-sm" required>
                            <option value="" disabled selected>-- Select Course Level --</option>
                            <option value="Beginner" class="text-success fw-semibold">Beginner</option>
                            <option value="Intermediate" class="text-warning fw-semibold">Intermediate</option>
                            <option value="Advanced" class="text-danger fw-semibold">Advanced</option>
                        </select>
                        <small class="text-muted">Choose the difficulty level for this course</small>
                    </div>

                    <!-- Duration -->
                    <div class="mb-3">
                        <label class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" placeholder="e.g. 5.0 Hrs">
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label class="form-label">Price (Rs)</label>
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="e.g. 0">
                    </div>

                    <!-- Free or Paid -->
                    <div class="mb-3">
                        <label for="is_free" class="form-label fw-bold">Course Type</label>
                        <select name="is_free" id="is_free" class="form-select border-primary shadow-sm" required>
                            <option value="" disabled selected>-- Select Course Type --</option>
                            <option value="Free" class="text-success fw-semibold">Free</option>
                            <option value="Paid" class="text-danger fw-semibold">Paid</option>
                        </select>
                        <small class="text-muted">Choose whether this course is free or paid</small>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label">Course Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Add Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

          </div>
        </div>
      </div>
      @include('admin.footer')
  </body>
</html>
