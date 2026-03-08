
 <style type="text/css">
        .table_deg {
            border: 2px solid white;
            width: 90%;              /* responsive width */
            max-width: 1200px;       /* prevent overflow */
            margin: auto;
            text-align: center;
            margin-top: 40px;
            

            /* Center the table */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .table_head {
            background-color: skyblue;
            padding: 10px;
        }
        tr {
            border: 3px solid white;
        }
        td {
            padding: 10px;
            color: white;
        }

        /* Make table scrollable on small screens */
        .table-container {
            overflow-x: auto;
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
         <div class="table-container">
              <table class="table_deg p-5">
                  <tr style="padding: 20px">
                      <th class="table_head">Student Name</th>
                      <th class="table_head">Email</th>
                      <th class="table_head">Phone</th>
                      <th class="table_head">Course</th>
                      <th class="table_head">Price</th>
                      
                      
                      <th class="table_head">Status</th>
                      <th class="table_head">Course-Img</th>
                      
                  </tr>

                  @foreach ($data as $datakey)
                      <tr>
                          <td>{{ $datakey->name }}</td>
                          <td>{{ $datakey->email }}</td>
                          <td>{{ $datakey->phone }}</td>
                          <td>{{ $datakey->course->title ?? 'Course Deleted' }}</td>
                          <td>{{ $datakey->course_price ?? 'Free' }}</td>
                          
                          
                          <td>
                             @if ($datakey->status == 'approve')
                                                        <span style="color:skyblue;">Approved</span>
                                                    @elseif ($datakey->status == 'rejected')
                                                        <span style="color:rgb(241, 9, 67);">Rejected</span>
                                                    @elseif ($datakey->status == 'waiting')
                                                        <span style="color:gold;">Waiting</span>
                                                    @else
                                                        <span style="color:gray;">Pending</span>
                                                    @endif
                          </td>
                          <td>
                              <img width="100" src="{{ asset('course/'.$datakey->course->image) }}" alt="Course Image">
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
