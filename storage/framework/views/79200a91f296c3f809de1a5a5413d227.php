<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="p-6">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> Requirements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i
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
                                <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>Tesda Form</td>
                                        <td>Form</td>
                                        <td><?php echo e(@date('m/d/Y g:i A', strtotime($row->created_at))); ?></td>
                                        <td><?php echo e($row->notes); ?></td>
                                        <td><?php echo e(@$row->course_status); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <a class="view-action dropdown-item" data-id="<?php echo e($row->id); ?>"
                                                        href="<?php echo e(route('guest.edit-form', ['id' => $row->user_id])); ?>"><i
                                                            class="feather icon-eye text-info"></i> Preview</a>
                                                    <a class="edit-action dropdown-item" data-id="<?php echo e($row->id); ?>"
                                                        href="javascript:void(0)"
                                                        onclick="handleDownload1(event, <?php echo e($row->id); ?>)"><i
                                                            class="feather icon-download text-info"></i> Download</a>
                                                    <?php if($row->course_status == 'approved'): ?>
                                                    <?php else: ?>
                                                        <a class="delete-action1 dropdown-item"
                                                            data-id="<?php echo e($row->user_id); ?>" href="javascript:void(0)"><i
                                                                class="feather icon-trash text-danger"></i> Delete</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__empty_1 = true; $__currentLoopData = $uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upload): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <span><?php echo e(strlen($upload->document_name) > 20 ? substr($upload->document_name, 0, 20) . '...' : $upload->document_name); ?></span>
                                        </td>
                                        <td><?php echo e(@$upload->document->name); ?></td>
                                        <td><?php echo e(@date('m/d/Y g:i A', strtotime($upload->created_at))); ?></td>
                                        <td><?php echo e(@$upload->description); ?></td>
                                        <td><?php echo e(@$upload->status); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <?php if(in_array(strtolower($upload->document_extension), ['jpg', 'jpeg', 'pdf'])): ?>
                                                        <a class="edit-action dropdown-item"
                                                            data-id="<?php echo e($upload->id); ?>" href="javascript:void(0)"
                                                            onclick="handlePreview(event, '<?php echo e(asset('storage/' . $upload->document_path)); ?>', <?php echo e($upload->id); ?>)"><i
                                                                class="feather icon-eye text-info"></i> Preview</a>
                                                    <?php endif; ?>
                                                    <a class="edit-action dropdown-item" data-id="<?php echo e($upload->id); ?>"
                                                        href="javascript:void(0)"
                                                        onclick="handleDownload(event, <?php echo e($upload->id); ?>)"><i
                                                            class="feather icon-download text-info"></i> Download</a>
                                                    <?php if(@$upload->status == 'approved'): ?>
                                                    <?php else: ?>
                                                        <a class="delete-action dropdown-item"
                                                            data-id="<?php echo e($upload->id); ?>" href="javascript:void(0)"><i
                                                                class="feather icon-trash text-danger"></i> Delete</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <form method="POST" action="<?php echo e(route('upload.create')); ?>" class="needs-validation" novalidate
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="inputState">Requirement Type</label>
                                <select class="form-control select2" name="document_id" required>
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($document->id); ?>"><?php echo e($document->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
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
<?php /**PATH D:\xampp\htdocs\smts\resources\views/pages/guest/requirements.blade.php ENDPATH**/ ?>