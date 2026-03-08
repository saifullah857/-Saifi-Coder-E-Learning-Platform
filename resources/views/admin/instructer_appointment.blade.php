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
                            <h3 class="mb-0 text-center fs-1">📩 Instructer Appointment Messages</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Degree</th>
                                            <th>Teaching Subject</th>
                                            <th>Status</th>
                                            <th>Send Email</th>
                                            <th>Delete</th>
                                            <th>Status Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instructors as $item)
                                            <tr>
                                                <td>{{ $item->first_name }}</td>
                                                <td>{{ $item->last_name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->degree }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>
                                                    @if ($item->status == 'approve')
                                                        <span style="color:skyblue;">Approved</span>
                                                    @elseif ($item->status == 'rejected')
                                                        <span style="color:rgb(241, 9, 67);">Rejected</span>
                                                    @elseif ($item->status == 'waiting')
                                                        <span style="color:gold;">Waiting</span>
                                                    @else
                                                        <span style="color:gray;">Pending</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-success btn-sm"
                                                        href="{{ url('send_emailtoinstructer', $item->id) }}">
                                                        <i class="fa fa-envelope"></i> Send
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="{{ url('delete_emailofinstructer', $item->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this message?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success"
                                                        href="{{ url('approve_instructer', $item->id) }}">Approve</a>
                                                    <a class="btn btn-warning mt-2 px-3"
                                                        href="{{ url('reject_instructer', $item->id) }}">Reject</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @if ($instructors->isEmpty())
                                <div class="alert alert-info text-center mt-3">
                                    No Instructer messages available 📭
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
