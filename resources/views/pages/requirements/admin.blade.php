<x-app-layout>
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Requirement's Information</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                        
                        <li class="breadcrumb-item"><a href="#!">Requirements List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="error-messages"></div>
    <div id="success-message" style="display: none"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Course List</h5>
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="feather icon-plus"></i> Create
                        </a>
                </div>

                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th style="width: 25%;">Name</th>
                                <th style="width: 60%;">Description</th>
                                <th style="width: 15%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($requirements as $row)
                                <tr>
                                    <td>{{ $row->name }}</td>
                                    <td class="text-wrap">{{ $row->description }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                            <div class="dropdown-menu">
                                                <a class="edit-action dropdown-item" data-id="{{ $row->id }}" href="javascript:void(0)"><i class="feather icon-edit text-info"></i> Edit</a>
                                                <a class="delete-action dropdown-item" data-id="{{ $row->id }}" href="javascript:void(0)"><i class="feather icon-trash text-danger"></i> Delete</a>
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

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Requirements Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('requirements.create') }}" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label >Description</label>
                            <textarea class="form-control" name="description"  placeholder="Enter Description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn  btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
        $('#data-table').DataTable({
            // Optional configurations can be added here
            "paging": true,
            "searching": true,
            "ordering": false
        });

        $('.edit-action').on('click', function() {
        // Get the data-id of the clicked item
            var id = $(this).data('id');
            $('.bd-example-modal-lg-edit').modal('show');
            $.ajax({
                type: "POST",
                url:appUrl + 'requirements/edit',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: {
                    id: id // Your data
                },
                success: function(data) {
                    $(".requirements-body").show().html(data);
                }
            });

        });


        $('.delete-action').on('click', function() {
            // Get the data-id of the clicked item
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
                        url: appUrl + 'requirements/delete', // Ensure 'appUrl' is defined and valid
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