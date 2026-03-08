<!DOCTYPE html>
<html>
<head>
    @include('admin.head')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            width: 95%;
            max-width: 1400px;
            margin: 40px auto;
            text-align: center;
            
            border-collapse: collapse;
        }

        .table_head {
            background-color: skyblue;
            color: white;
            padding: 12px;
            font-weight: bold;
        }

        .table_deg th,
        .table_deg td {
            border: 1px solid white;
            padding: 10px;
            color: white;
        }

        .table_deg tr:hover {
            background-color: rgba(135, 206, 235, 0.2);
        }

        .table-container {
            overflow-x: auto;
        }

        .btn {
            margin: 3px;
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

                    <div class="table-container">
                        <table class="table_deg">

                            <tr>
                                <th class="table_head">Student Name</th>
                                <th class="table_head">Email</th>
                                <th class="table_head">Phone</th>
                                <th class="table_head">C-Name</th>
                                <th class="table_head">C-Price</th>
                                <th class="table_head">Enrollment Date</th>
                                <th class="table_head">Payment Image</th>
                                <th class="table_head">Status</th>
                                <th class="table_head">C-Img</th>
                                <th class="table_head">Delete</th>
                                <th class="table_head">Status Update</th>
                            </tr>

                            @foreach ($data as $datakey)
                                <tr>
                                    <td>{{ $datakey->name }}</td>
                                    <td>{{ $datakey->email }}</td>
                                    <td>{{ $datakey->phone }}</td>

                                    <td>
                                        {{ $datakey->course->title ?? 'Course Deleted' }}
                                    </td>

                                    <td>
                                        {{ $datakey->course_price ?? 'Free' }}
                                    </td>

                                    <td>
                                        {{ $datakey->enrollment_date }}
                                    </td>

                                    <td>
                                        @if($datakey->image)
                                            <img src="{{ asset('course/'.$datakey->image) }}"
                                                 alt="Payment Screenshot"
                                                 style="width:100px;height:80px;object-fit:cover;border-radius:5px;">
                                        @else
                                            <span style="color:gray;">No Image</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($datakey->status == 'approve')
                                            <span style="color:skyblue;font-weight:bold;">Approved</span>
                                        @elseif ($datakey->status == 'rejected')
                                            <span style="color:red;font-weight:bold;">Rejected</span>
                                        @elseif ($datakey->status == 'waiting')
                                            <span style="color:gold;font-weight:bold;">Waiting</span>
                                        @else
                                            <span style="color:gray;">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($datakey->course && $datakey->course->image)
                                            <img width="100"
                                                 src="{{ asset('course/'.$datakey->course->image) }}"
                                                 alt="Course Image">
                                        @else
                                            <span style="color:gray;">No Image</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a onclick="return confirm('Are you sure to delete this?');"
                                           class="btn btn-danger"
                                           href="{{ url('delete_enrollment', $datakey->id) }}">
                                            Delete
                                        </a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success"
                                           href="{{ url('approve_enrollment', $datakey->id) }}">
                                            Approve
                                        </a>

                                        <a class="btn btn-warning"
                                           href="{{ url('reject_enrollment', $datakey->id) }}">
                                            Reject
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </table>
                    </div>

                </div> <!-- container-fluid -->
            </div> <!-- page-header -->
        </div> <!-- page-content -->

    </div> <!-- d-flex -->

    @include('admin.footer')
</body>
</html>