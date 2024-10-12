<x-app-layout>
    <div class="p-6">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Requirements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"> Files</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="error-messages"></div>
        <div id="success-message" style="display: none"></div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Course List</h5>
                    <a href="#" class="btn btn-primary float-right" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="feather icon-plus"></i> Create
                    </a>
                </div>

                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Upload Type</th>
                                    <th>Date Uploaded</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $row)
                                    <tr>
                                        <td>Tesda Form</td>
                                        <td>Form</td>
                                        <td>{{ @date('m/d/Y g:i A', strtotime($row->created_at)) }}</td>
                                        <td>{{ $row->notes }}</td>
                                        <td>{{ @$row->course_status }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <a class="view-action dropdown-item" data-id="{{ $row->id }}"
                                                        href="{{ route('guest.edit-form', ['id' => $row->user_id]) }}"><i
                                                            class="feather icon-eye text-info"></i> Preview</a>
                                                    <a class="edit-action dropdown-item" data-id="{{ $row->id }}"
                                                        href="javascript:void(0)"
                                                        onclick="handleDownload1(event, {{ $row->id }})"><i
                                                            class="feather icon-download text-info"></i> Download</a>
                                                    @if ($row->course_status == 'approved')
                                                    @else
                                                        <a class="delete-action1 dropdown-item"
                                                            data-id="{{ $row->user_id }}" href="javascript:void(0)"><i
                                                                class="feather icon-trash text-danger"></i> Delete</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @forelse($uploads as $upload)
                                    <tr>
                                        <td>
                                            <span>{{ strlen($upload->document_name) > 20 ? substr($upload->document_name, 0, 20) . '...' : $upload->document_name }}</span>
                                        </td>
                                        <td>{{ @$upload->document->name }}</td>
                                        <td>{{ @date('m/d/Y g:i A', strtotime($upload->created_at)) }}</td>
                                        <td>{{ @$upload->description }}</td>
                                        <td>{{ @$upload->status }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    @if (in_array(strtolower($upload->document_extension), ['jpg', 'jpeg', 'pdf']))
                                                        <a class="edit-action dropdown-item"
                                                            data-id="{{ $upload->id }}" href="javascript:void(0)"
                                                            onclick="handlePreview(event, '{{ asset('storage/' . $upload->document_path) }}', {{ $upload->id }})"><i
                                                                class="feather icon-eye text-info"></i> Preview</a>
                                                    @endif
                                                    <a class="edit-action dropdown-item" data-id="{{ $upload->id }}"
                                                        href="javascript:void(0)"
                                                        onclick="handleDownload(event, {{ $upload->id }})"><i
                                                            class="feather icon-download text-info"></i> Download</a>
                                                    @if (@$upload->status == 'approved')
                                                    @else
                                                        <a class="delete-action dropdown-item"
                                                            data-id="{{ $upload->id }}" href="javascript:void(0)"><i
                                                                class="feather icon-trash text-danger"></i> Delete</a>
                                                    @endif
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

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="myLargeModalLabel">Requirements Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('upload.create') }}" class="needs-validation" novalidate
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputState">Requirement Type</label>
                                <select class="form-control select2" name="document_id" required>
                                    <option value="">Select</option>
                                    @foreach ($documents as $document)
                                        <option value="{{ $document->id }}">{{ $document->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Attachment</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" name="description" placeholder="Enter Note's or remarks" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn  btn-primary">Save</button>
                        </form>
                    </div>
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
                        url: appUrl +
                        'upload/delete', // Ensure 'appUrl' is defined and valid
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

        $('.delete-action1').on('click', function() {
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
                        url: appUrl +
                        'student/delete', // Ensure 'appUrl' is defined and valid
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

    async function handlePreview(event, imageUrl, documentId) {
        event.preventDefault(); // Prevent default anchor navigation

        try {
            // Create a temporary link element to view file in new tab
            const link = document.createElement('a');
            link.href = imageUrl;
            link.target = '_blank';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            // Reload the page to refresh the table
            setTimeout(() => {
                window.location.reload();
            }, 100);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function handleDownload(event, documentId) {
        event.preventDefault(); // Prevent default anchor behavior
        try {
            // Create a hidden form to trigger the file download
            const form = document.createElement('form');
            form.method = 'GET';
            form.action = `/requirements/documents/${documentId}/download`; // Corrected to match the route
            form.style.display = 'none';

            // Append the form to the body and submit it
            document.body.appendChild(form);
            form.submit();

            // Optional: Reload the page to refresh the table
            setTimeout(() => {
                window.location.reload();
            }, 600);
        } catch (error) {
            console.error('Error during download:', error);
        }
    }
</script>
