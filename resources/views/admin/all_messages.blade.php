<!DOCTYPE html>
<html>
<head>
    @include('admin.head')
</head>
<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0 text-center fs-1">📩 Contact Messages</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Send Email</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td class="text-start">{{ $item->message }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" href="{{ url('send_email', $item->id) }}">
                                                        <i class="fa fa-envelope"></i> Send
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="{{ url('delete_email', $item->id) }}"
                                                       onclick="return confirm('Are you sure you want to delete this message?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @if($contact->isEmpty())
                                <div class="alert alert-info text-center mt-3">
                                    No contact messages available 📭
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('admin.footer')
    </div>
</body>
</html>
