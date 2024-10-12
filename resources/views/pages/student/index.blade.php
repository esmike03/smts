<x-app-layout>

<style>
    .form-select {
    width: auto; /* Adjust width as needed */
    padding: 5px;
    border: 1px solid #ccc; /* Example border */
    border-radius: 4px; /* Example border-radius */
}

.select-filter {
    margin-right: 20px; /* Adjust the distance as needed */
}
</style>
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Student's Information</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Student's List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Student List</h5>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($user->user->first_name) }}</td>
                                    <td>{{ $user->user->email }}</td>
                                    <td>{{ $user->user->phone }}</td>
                                    <td>{{ $user->user->type_scholar }}</td>
                                    <td>{{ @$user->subject->title }}</td>
                                    <td>{{ @$user->subject->batch }}</td>
                                    <td>{{ @$user->subject->status }}</td>
                                    <td>
                                    <a class="profile-action text-info" href="{{ route('guest.profile', ['id' => $user->user->id]) }}" title="Profile">
                                        <i class="feather icon-user"></i> 
                                    </a>

                                        <a class="delete-action text-danger" data-id="{{ $user->user->id }}" href="javascript:void(0)"  title="Delete">
                                            <i class="feather icon-trash"></i> 
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

    <div class="modal fade bd-example-modal-lg-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Requirements Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body requirements-body">
                   
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script>
    const appUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
    $(document).ready(function() {

    var table = $("#data-table").DataTable({
        "paging": true,
        "searching": true,
        "ordering": false,
    });

    setTimeout(function() {

            // Create the Course dropdown
            var courseSelect = $('<select id="courseFilter" class="form-select select-filter"><option value="">All Courses</option></select>')
                .prependTo('#data-table_filter') // Position before search input
                .on('change', function() {
                    var selectedCourse = $(this).val();
                    table.column(5).search(selectedCourse).draw(); // Filter by Course
                });

            // Populate Course dropdown with data from PHP
            var courses = @json($courses);
            $.each(courses, function(index, course) {
                courseSelect.append('<option value="' + course.title + '">' + course.title + ' Batch ' + course.batch + '</option>'); // Adjust according to your Course model's attribute
            });

            
    }, 100);



        $('.delete-action').on('click', function() {
            var id = $(this).data('id');

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
                    $.ajax({
                        type: "POST",
                        url: appUrl + 'student/delete', // Ensure 'appUrl' is defined and valid
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Ensure 'csrfToken' is defined and valid
                        },
                        data: {
                            id: id // Your data
                        }
                    }).done(function(data) {
                        // Successful deletion
                        Swal.fire(
                            'Deleted!',
                            'The item has been deleted.',
                            'success'
                        ).then(() => {
                            // Optionally, remove the row from the table
                            window.location.reload();
                        });
                    }).fail(function(xhr, status, error) {
                        // Handle error
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the item.',
                            'error'
                        );
                        console.error('Error:', error);
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'The item was not deleted.',
                        'info'
                    );
                }
            });
        });


    }); 
</script>