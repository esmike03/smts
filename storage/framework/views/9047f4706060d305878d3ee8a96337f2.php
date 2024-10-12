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
    <style>
        .table {
    table-layout: fixed;
    width: 100%;
}
.description-cell {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px; /* Adjust width as needed */
}
.text-wrap {
    word-wrap: break-word;
    white-space: normal;
    max-width: 100%; /* Adjust as needed */
    overflow-wrap: break-word;
}

    </style>
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Course's Information</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="feather icon-home"></i></a></li>
                                
                                <li class="breadcrumb-item"><a href="#!">Course's Information</a></li>
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
                            <h5>Course List</h5>
                                <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary float-right">
                                    <i class="feather icon-plus"></i> Create
                                </a>
                                
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover" id="coursesTable">
                                    <thead>
                                    <tr>
                                        <th style="width: 25%;">Subject</th>
                                        <th style="width: 35%;">Description</th>
                                        <th style="width: 10%;">Slots</th>
                                        <th style="width: 10%;">Batch</th>
                                        <th style="width: 10%;">Status</th>
                                        <th style="width: 10%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td style="width:25%;">
                                                    <div class="d-flex align-items-center">
                                                        <?php if($course->upload): ?>
                                                        <img src="<?php echo e(asset($course->upload)); ?>" alt="<?php echo e($course->title); ?>" class="img-radius wid-40 align-top m-r-15">
                                                        <?php else: ?>
                                                        <img src="<?php echo e(asset('assets/images/tesda.png')); ?>" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <?php endif; ?>

                                                        <div>
                                                            <h6 class="m-0"><?php echo e(ucwords($course->title)); ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width:35%;" class="text-wrap"><?php echo e($course->description); ?></td>


                                                <td style="width:10%;"><?php echo e($course->slots); ?></td>
                                                <td style="width:10%;"><?php echo e($course->batch); ?></td>
                                                <td style="width:10%;">
                                                    <select class="form-control select2" name="courses" onchange="change_status(<?php echo e($course->id); ?>, this.value)">
                                                        <option>Select</option>
                                                        <option value="In Progress" <?php echo e(@$course->status == 'In Progress' ? 'selected' : ''); ?>>In Progress</option>
                                                        <option value="Completed"<?php echo e(@$course->status == 'Completed' ? 'selected' : ''); ?>>Completed</option>
                                                        <option value="Cancelled"<?php echo e(@$course->status == 'Cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                                    </select>
                                                </td>
                                                <td style="width:10%;">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                        <div class="dropdown-menu">
                                                            <!-- <a class="action dropdown-item" data-id="<?php echo e($course->id); ?>" href="javascript:void(0)"><i class="feather icon-eye text-info"></i> View</a> -->
                                                            <a class="edit-action dropdown-item" data-id="<?php echo e($course->id); ?>" href="javascript:void(0)"><i class="feather icon-edit text-info"></i> Edit</a>
                                                            <a class="delete-action dropdown-item" data-id="<?php echo e($course->id); ?>" href="javascript:void(0)"><i class="feather icon-trash text-danger"></i> Delete</a>
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
            </div>
        </div>
        <script>
            const appUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
            document.addEventListener('DOMContentLoaded', function () {

                $('#coursesTable').DataTable({
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
                                axios.delete(`/courses/delete/${userId}`, {
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    }
                                })
                                .then(response => {
                                    Swal.fire(
                                        'Deleted!',
                                        'course has been deleted.',
                                        'success'
                                    ).then(() => {
                                        // Optionally, remove the row from the table
                                        this.closest('tr').remove();
                                    });
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the course.',
                                        'error'
                                    );
                                    console.error('Error:', error.response ? error.response.data : error.message);
                                });
                            } else {
                                Swal.fire(
                                    'Cancelled',
                                    'The course was not deleted.',
                                    'info'
                                );
                            }
                        });
                    });
                });

                document.querySelectorAll('.edit-action').forEach(button => {
                    button.addEventListener('click', function () {
                        const userId = this.getAttribute('data-id');
                        axios.get(`/courses/edit/${userId}`, {
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // Optional for GET requests
                            }
                        })
                        .then(response => {
                            console.log('User data:', response.data);
                            window.location.href = `/courses/edit/${userId}`;
                        })
                        .catch(error => {
                            console.error('Error fetching user data:', error.response ? error.response.data : error.message);
                        });
                    });
                });
            });

            function change_status(id,status)
            {
                $.ajax({
                    type: "POST",
                    url:appUrl + 'courses/status',
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

        </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\smts\resources\views/pages/courses/index.blade.php ENDPATH**/ ?>