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
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Student's Information</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Student's List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="error-messages"></div>
    <div id="success-message" style="display: none"></div>
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Certificate List</h5>
                    <?php if(Auth::user()->type == 'Admin'): ?>
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="feather icon-plus"></i> Create
                        </a>
                    <?php endif; ?>
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
                                    <th>Attachment</th>
                                    <th>Date Joined</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e(ucwords($student->user->first_name.' '.$student->user->middle_name.' '.$student->user->last_name)); ?></td>
                                        <td><?php echo e($student->user->email); ?></td>
                                        <td><?php echo e($student->user->phone); ?></td>
                                        <td><?php echo e($student->user->type_scholar); ?></td>
                                        <td><?php echo e(@$student->subject->title); ?></td>
                                        
                                        <td>
                                            <a 
                                                href="#" 
                                                title="View" 
                                                onclick="handleDownload(event, <?php echo e(@$student->certificate->id); ?>)">
                                                <span><?php echo e(strlen(@$student->certificate->document_name) > 20 ? substr(@$student->certificate->document_name,0,20)."..." : @$student->certificate->document_name); ?></span>
                                            </a>
                                        </td>
                                        <td>
                                        <?php echo e(!empty($student->created_at) ? date('m/d/Y', strtotime($student->created_at)) : 'Not yet'); ?>

                                        </td>
                                        <td>
                                            <a class="delete-action text-danger" data-id="<?php echo e($student->certificate->id); ?>" href="javascript:void(0)"  title="Delete">
                                                <i class="feather icon-trash"></i> 
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <form method="POST" action="<?php echo e(route('certificate.create')); ?>" class="needs-validation" novalidate enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="inputState">Student's Name</label>
                            <select class="form-control select2" name="user_id" required>
                                <option value="">Select</option>
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->user_id); ?>"><?php echo e(ucwords(@$row->user->first_name . ' ' .@$row->user->middle_name. ' ' .@$row->user->last_name )); ?></option>
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
                            <label >Notes</label>
                            <textarea class="form-control" name="description"  placeholder="Enter Note's or remarks" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn  btn-primary">Save</button>
                    </form>
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
                        url: appUrl + 'certificate/delete', // Ensure 'appUrl' is defined and valid
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
                            'The certificate has been deleted.',
                            'success'
                        ).then(() => {
                            // Optionally, remove the row from the table
                            window.location.reload();
                        });
                    }).fail(function(xhr, status, error) {
                        // Handle error
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the certificate.',
                            'error'
                        );
                        console.error('Error:', error);
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'The certificate was not deleted.',
                        'info'
                    );
                }
            });
        });


    }); 

    async function handleDownload(event, certificateId) {
    event.preventDefault(); // Prevent default anchor behavior

    try {
        // Create a hidden form to trigger the file download
        const form = document.createElement('form');
        form.method = 'GET';
        form.action = `/certificate/documents/${certificateId}/download`; // Ensure this matches your route
        form.style.display = 'none';

        document.body.appendChild(form);
        form.submit();
    } catch (error) {
        console.error('Error during download:', error);
    }
}


</script><?php /**PATH D:\xampp\htdocs\smts\resources\views/pages/certificates/index.blade.php ENDPATH**/ ?>