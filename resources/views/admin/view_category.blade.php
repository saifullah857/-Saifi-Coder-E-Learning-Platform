<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')
   <!-- Bootstrap Icons (for checkmark icon) -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

              {{-- Success Alert --}}
              @if(session('message'))
                  <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                      <i class="bi bi-check-circle-fill me-2"></i>
                      <strong>Success!</strong> {{ session('message') }}
                      
                  </div>
              @endif

              {{-- Card for Category Form --}}
              <div class="card shadow-lg border-0 rounded-3 mb-4">
                  <div class="card-header bg-primary text-white text-center">
                      <h4>Add New Category</h4>
                  </div>
                  <div class="card-body p-4">
                      <form action="{{ url('upload_category') }}" method="POST" enctype="multipart/form-data">
                          @csrf

                          <div class="mb-3">
                              <label for="name" class="form-label">Category Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name" required>
                          </div>

                          <div class="mb-3">
                              <label for="image" class="form-label">Category Image</label>
                              <input type="file" name="image" class="form-control" id="image" accept="image/*">
                          </div>

                          <div class="d-grid">
                              <button type="submit" class="btn btn-success">Save Category</button>
                          </div>
                      </form>
                  </div>
              </div>

              {{-- Category List Table --}}
              <div class="card shadow-lg border-0 rounded-3">
                  <div class="card-header bg-primary text-white text-center">
                      <h4>All Categories</h4>
                  </div>
                  <div class="card-body p-4">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover align-middle text-center">
                              <thead class="table-dark">
                                  <tr>
                                      <th>#</th>
                                      <th>Category Name</th>
                                      <th>Image</th>
                                      
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($category as $key => $cat)
                                      <tr>
                                          <td>{{ $key+1 }}</td>
                                          <td>{{ $cat->name }}</td>
                                          <td>
                                              @if($cat->image)
                                                  <img src="{{ asset('course/'.$cat->image) }}" alt="Category Image" width="60" height="60" class="rounded">
                                              @else
                                                  <span class="text-muted">No Image</span>
                                              @endif
                                          </td>
                                          
                                          <td>
                                              <a href="{{ url('delete_category', $cat->id) }}" 
                                                 onclick="return confirm('Are you sure you want to delete this category?')" 
                                                 class="btn btn-sm btn-danger">
                                                  Delete
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

      {{-- Auto dismiss success message --}}
      <script>
        setTimeout(() => {
            let alert = document.querySelector('.alert');
            if (alert) {
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000); // auto close after 3 seconds
      </script>
  </body>
</html>
