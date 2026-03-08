<style type="text/css">
    /* Table styling */
    .table_deg {
        border: 2px solid white;
        width: 90%;               /* responsive width */
        max-width: 1200px;        /* prevent overflow */
        margin: 40px auto 0;      /* top margin + center horizontally */
        text-align: center;
        padding: 10px;

        /* Center the table vertically */
        position: relative;       /* changed from absolute for better responsiveness */
        /* top: 50%; left: 50%; transform: translate(-50%, -50%); removed for scrollable page */
    }

    .table_head {
        background-color: skyblue;
        color: black;
       padding: 20px;
        font-weight: bold;
        font-size: 16px;
    }

    tr {
        border: 1px solid white;
       padding: 20px;

    }
th{
    padding: 10px;
}
    td {
        padding: 20px;
        color: white;
        border: 1px solid white;
    }

    /* Make table scrollable on small screens */
    .table-container {
        overflow-x: auto;
    }

    /* Optional: hover effect */
    .table_deg tr:hover {
        background-color: rgba(135, 206, 235, 0.3); /* light skyblue hover */
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100 dark:text-gray-100">
                    <div class="table-container">
                        <table class="table_deg">
                            <tr class="table_head">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Degree</th>
                                <th>Teaching Subject</th>
                                <th>Status</th>
                            </tr>
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
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>