<x-app-layout>
    
    <div class="pcoded-content">

        <div class="row">
            <div class="col-md-3">
                <div class="card">

                    <div class="flex-none pt-3">
                        <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                          <center><img src="{{ asset($user->teacherDetails->upload) }}" alt="" class="w-full h-full object-cover rounded-full"></center><br>
                            <center class="pt-2">Trainer's Number <br>{{ $user->teacherDetails->accreditation_number ?? 'N/A' }}</center>
                        </div>
                      </div>
                      <br>
                    <hr>

                    <table class="table-auto w-full border-collapse p-3">
                        <tbody>
                            <tr>
                                <td class="pl-3 py-2 font-semibold">Teacher's Name :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ ucwords(trim($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name)) }}</td>
                            </tr>

                            <tr>
                                <td class="pl-3 py-2 font-semibold">Email :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ $user->email ?? 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="pl-3 py-2 font-semibold">Phone :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->contact ?? 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="pl-3 py-2 font-semibold">Address :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->address ?? 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="pl-3 py-2 font-semibold">Course :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->course->title ?? 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td class="pl-3 py-2 font-semibold">Gender :</td>
                                <td class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->gender ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5>Registered Student's</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                                <tr>
                                <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Scholar Type</th>
                                    <th>Course</th>
                                    <th>Batch</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($student->user->first_name) }}</td>
                                    <td>{{ $student->user->email }}</td>
                                    <td>{{ $student->user->phone }}</td>
                                    <td>{{ $student->user->type_scholar }}</td>
                                    <td>{{ @$student->subject->title }}</td>
                                    <td>{{ @$student->subject->batch }}</td>
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

</x-app-layout>    
<script>
    $(document).ready(function() {

        var table = $("#data-table").DataTable({
            "paging": true,
            "searching": true,
            "ordering": false,
        });
        
    }); 
</script>