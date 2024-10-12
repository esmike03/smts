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
<div class="row">
    <div class="col-xl-3">
        <div class="card overflow-hidden">
        <br>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="avatar-md profile-user-wid mb-4">
                           <center><img src="<?php echo e(asset('assets/images/tesda.png')); ?>" alt="User-Profile-Image" class="img-thumbnail rounded-circle" style="width: 20%;"></center> 
                        </div>
                    </div>

                    

                </div>
                <div class="card-body">
                    <h4 class="card-title mb-4">Personal Information</h4>
                    
            
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">First Name :</th>
                                    <td><?php echo e(ucwords(@$user->first_name )); ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Middle Name :</th>
                                    <td><?php echo e(ucwords(@$user->middle_name )); ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Last Name :</th>
                                    <td><?php echo e(ucwords(@$user->last_name )); ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td><?php echo e(@$user->email); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between align-items-center mb-4">


                            <!-- <?php if(@$user->type == 'Guest'): ?>
                                <h6 style="color:red">Activated only when <br> Tesda Form was submitted</h6>
                                <button  class="btn btn-secondary float-right" type="button"  onclick="convert_data(<?php echo e($user->id); ?>)">Convert</button>
                            <?php else: ?>
                           
                            <?php endif; ?> -->


                        </div>
                    </div><br>
        
                </div>
            </div>
        </div>
            <!-- end card -->
   
        <!-- end card -->
    </div>  
    <div class="col-xl-9">
    <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tesda Form</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap table-hover mb-0" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">Requirements</th>
                                <th scope="col">Attachments</th>
                                <th scope="col">Date Submitted</th>
                                <th scope="col"> Remarks</th>
                                <th scope="col">Status</th>
                                <!-- <th scope="col">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            
                  
                            <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>Tesda Form</td>
                                <td>Form</td>
                                <td><?php echo e(@date('m/d/Y g:i A', strtotime($row->created_at))); ?></td>
                                <td><?php echo e(@$row->course_status); ?></td>
                                <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="view-action dropdown-item" data-id="<?php echo e($row->id); ?>" href="<?php echo e(route('guest.edit-form', ['id' => $row->user_id])); ?>"><i class="feather icon-eye text-success"></i> View</a>
                                        <a class="edit-action dropdown-item" data-id="<?php echo e($row->id); ?>" href="javascript:void(0)"  onclick="handleDownload1(event, <?php echo e($row->id); ?>)"><i class="feather icon-download text-info"></i> Download</a>
                                        <!-- <a class="delete-action1 dropdown-item" data-id="<?php echo e($row->id); ?>" href="javascript:void(0)"><i class="feather icon-trash text-danger"></i> Delete</a> -->
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

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">My Requirements</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap table-hover mb-0" id="data-table">
                        <thead>
                            <tr>
                                <th scope="col">Requirements</th>
                                <th scope="col">Attachments</th>
                                <th scope="col">File Type</th>
                                <th scope="col">Date Submitted</th>
                                <th scope="col"> Remarks</th>
                                <th scope="col">Status</th>
                                <!-- <th scope="col">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            
                  
                        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(@$document->name); ?></td>
                            <td>
                                <a 
                                    href="#" 
                                    title="View" 
                                    onclick="handleDownload(event, <?php echo e(@$document->upload->id); ?>)">
                                    
                                    <span><?php echo e(strlen(@$document->upload->document_name) > 20 ? substr(@$document->upload->document_name,0,20)."..." : @$document->upload->document_name); ?></span>
                                </a>
                            </td>
                            <td>
                                <?php echo e(@$document->upload->document_extension? @$document->upload->document_extension : 'Not yet'); ?>

                            </td>
                            <td> 
                                <?php echo e(@$document->upload->created_at ? date('m/d/Y g:i A', strtotime($document->upload->created_at)) : ''); ?>

                            </td>

                            <td>
                                <?php echo e(@$document->upload->description? @$document->upload->description : 'Not yet'); ?>

                            </td>

                            <td>
                                <?php if(@$document->upload->status): ?>
                                <select class="form-control select2" name="gender" onchange="change_status(<?php echo e($document->upload->id); ?>, this.value)">
                                    <option>Select</option>
                                    <option value="pending" <?php echo e(@$document->upload->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                                    <option value="approved"<?php echo e(@$document->upload->status == 'approved' ? 'selected' : ''); ?>>Approved</option>
                                    <option value="reject"<?php echo e(@$document->upload->status == 'reject' ? 'selected' : ''); ?>>Reject</option>
                                </select>
                                <?php else: ?>
                                <?php endif; ?>
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
        // setTimeout(() => { window.location.reload(); }, 100);
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

        document.body.appendChild(form);
        form.submit();

 
    } catch (error) {
        console.error('Error during download:', error);
    }
}

function change_status(id,status)
{
    $.ajax({
        type: "POST",
        url:appUrl + 'guest/status',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        data: {
                id: id,
                status:status
                },
        success: function(data) {
            // $(".intern-profile").show().html(data);
        }
    });
}

function convert_data(id)
{
    Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, convert it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: appUrl + 'guest/convert', // Ensure 'appUrl' is defined and valid
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Ensure 'csrfToken' is defined and valid
                        },
                        data: {
                            id: id // Your data
                        }
                    }).done(function(data) {
                        // Successful deletion
                        Swal.fire(
                            'Converted!',
                            'The user has been converted.',
                            'success'
                        ).then(() => {
                            // Optionally, remove the row from the table
                            window.location.reload();
                        });
                    }).fail(function(xhr, status, error) {
                        // Handle error
                        Swal.fire(
                            'Error!',
                            'There was an error converting the user.',
                            'error'
                        );
                        console.error('Error:', error);
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'The user was not converted.',
                        'info'
                    );
                }
            });
}
</script><?php /**PATH D:\xampp\htdocs\smts\resources\views/pages/guest/profile.blade.php ENDPATH**/ ?>