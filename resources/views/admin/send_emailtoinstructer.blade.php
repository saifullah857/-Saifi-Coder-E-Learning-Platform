<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.head')

    <style>
        .form-container {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')

        <!-- Page Content -->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    {{-- Card --}}
                    <div class="card shadow-lg border-0 rounded-3 form-container">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Send Mail to <strong>{{ $data->first_name }}</strong></h4>
                        </div>

                        <div class="card-body p-4">
                            <form action="{{ url('mail', $data->id) }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Greeting</label>
                                    <input type="text" name="greeting" class="form-control" placeholder="Enter greeting (e.g. Hello John)">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Mail Body</label>
                                    <textarea name="body" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Action Text</label>
                                    <input type="text" name="actiontext" class="form-control" placeholder="e.g. View Details">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Action URL</label>
                                    <input type="url" name="actionurl" class="form-control" placeholder="https://example.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">End Line</label>
                                    <input type="text" name="endline" class="form-control" placeholder="e.g. Thank you for using our service">
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-envelope-fill"></i> Send Mail
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>
