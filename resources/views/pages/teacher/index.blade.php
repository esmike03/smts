<x-app-layout>
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Teacher's Information</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                                
                                <li class="breadcrumb-item"><a href="#!">Teacher's Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div id="error-messages"></div>
            <div id="success-message" style="display: none"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Teachers List</h5>
                                <a href="{{ route('teacher.create') }}" class="btn btn-primary float-right">
                                    <i class="feather icon-plus"></i> Create
                                </a>
                                
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover" id="teacherTable">
                                    <thead>
                                        <tr>
                                            <th>Trainer's Number</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Field of Expertice</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->teacherDetails->accreditation_number ?? 'N/A' }}</td>
                                                <td>


                                                    @if($user->teacherDetails->upload)
                                                    <div class="d-flex align-items-center">
                                                        <!-- Profile Picture -->
                                                  
                                                        <img src="{{ asset($user->teacherDetails->upload) }}" alt="{{ $user->first_name }}" class="img-radius wid-40 align-top m-r-15">
                                                        <!-- User Details -->
                                                        <div>
                                                            <h6 class="m-0">{{ ucwords(trim($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name)) }}</h6>
                                                            <p class="text-muted m-0">{{ $user->email ?? 'N/A' }}</p>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="d-flex align-items-center">
                                                        <!-- Profile Picture -->
                                                        <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <!-- User Details -->
                                                        <div>
                                                            <h6 class="m-0">{{ ucwords(trim($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name)) }}</h6>
                                                            <p class="text-muted m-0">{{ $user->email ?? 'N/A' }}</p>
                                                        </div>
                                                    </div>

                                            
                                                    @endif

                                               


                                                </td>
                                     
                                                <td>{{ $user->teacherDetails->contact ?? 'N/A' }}</td>
                                                <td>{{ $user->teacherDetails->address ?? 'N/A' }}</td>
                                                <td>{{ $user->teacherDetails->course->title ?? 'N/A' }}</td>
                                                
                                                <td>{{ $user->teacherDetails->gender ?? 'N/A' }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <a class="view-action dropdown-item" data-id="{{ $user->id }}" href="javascript:void(0)"><i class="feather icon-eye text-info"></i> View</a>
                                                            <a class="edit-action dropdown-item" data-id="{{ $user->id }}" href="javascript:void(0)"><i class="feather icon-edit text-info"></i> Edit</a>
                                                            <a class="delete-action dropdown-item" data-id="{{ $user->id }}" href="javascript:void(0)"><i class="feather icon-trash text-danger"></i> Delete</a>
                                                        </div>
                                                    </div>
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                $('#teacherTable').DataTable({
                    // Optional configurations can be added here
                    "paging": true,
                    "searching": true,
                    "ordering": false
                });
                
                document.querySelectorAll('.delete-action').forEach(button => {
                    button.addEventListener('click', function () {
                        const userId = this.getAttribute('data-id');
                        
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                axios.delete(`/teacher/delete/${userId}`, {
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    }
                                })
                                .then(response => {
                                    Swal.fire(
                                        'Deleted!',
                                        'teacher has been deleted.',
                                        'success'
                                    ).then(() => {
                                        // Optionally, remove the row from the table
                                        this.closest('tr').remove();
                                    });
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the teacher.',
                                        'error'
                                    );
                                    console.error('Error:', error.response ? error.response.data : error.message);
                                });
                            } else {
                                Swal.fire(
                                    'Cancelled',
                                    'The teacher was not deleted.',
                                    'info'
                                );
                            }
                        });
                    });
                });

                document.querySelectorAll('.edit-action').forEach(button => {
                    button.addEventListener('click', function () {
                        const userId = this.getAttribute('data-id');
                        axios.get(`/teacher/edit/${userId}`, {
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // Optional for GET requests
                            }
                        })
                        .then(response => {
                            console.log('User data:', response.data);
                            window.location.href = `/teacher/edit/${userId}`;
                        })
                        .catch(error => {
                            console.error('Error fetching user data:', error.response ? error.response.data : error.message);
                        });
                    });
                });

                document.querySelectorAll('.view-action').forEach(button => {
                    button.addEventListener('click', function () {
                        const userId = this.getAttribute('data-id');
                        axios.get(`/teacher/profile/${userId}`, {
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // Optional for GET requests
                            }
                        })
                        .then(response => {
                            console.log('User data:', response.data);
                            window.location.href = `/teacher/profile/${userId}`;
                        })
                        .catch(error => {
                            console.error('Error fetching user data:', error.response ? error.response.data : error.message);
                        });
                    });
                });

            });
        </script>
</x-app-layout>