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
    <?php if(Auth::user()->type == 'Admin'): ?>

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-layout"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><?php echo e($coursesCount); ?></h4>
                            <h6>Courses</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">

                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><?php echo e($teachersCount); ?></h4>
                            <h6>Teachers</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><?php echo e($studentsCount); ?></h4>
                            <h6>Students</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- prject ,team member start -->
            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Courses</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i
                                                    class="feather icon-maximize"></i> maximize</span><span
                                                style="display:none"><i class="feather icon-minimize"></i>
                                                Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                    class="feather icon-minus"></i> collapse</span><span
                                                style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i
                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i
                                                class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-hover" id="coursesTable">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Subject</th>
                                        <th style="width: 45%;">Description</th>
                                        <th style="width: 10%;">Slots</th>
                                        <th style="width: 10%;">Batch</th>
                                        <th style="width: 10%;">Students</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td style="width:25%;" class="text-wrap">
                                                <div class="d-flex align-items-center">
                                                    <?php if($course->upload): ?>
                                                        <img src="<?php echo e(asset($course->upload)); ?>"
                                                            alt="<?php echo e($course->title); ?>"
                                                            class="img-radius wid-40 align-top m-r-15">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('assets/images/tesda.png')); ?>"
                                                            alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <?php endif; ?>

                                                    <div>
                                                        <h6 class="m-0"><?php echo e(ucwords($course->title)); ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:45%;" class="text-wrap"><?php echo e($course->description); ?></td>
                                            <td style="width:10%;"><?php echo e($course->slots); ?></td>
                                            <td style="width:10%;"><?php echo e($course->batch); ?></td>
                                            <td style="width:10%;"><?php echo e($course->students_count); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Teachers</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i
                                                    class="feather icon-maximize"></i> maximize</span><span
                                                style="display:none"><i class="feather icon-minimize"></i>
                                                Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                    class="feather icon-minus"></i> collapse</span><span
                                                style="display:none"><i class="feather icon-plus"></i>
                                                expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i
                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i
                                                class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-hover" id="teachersTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Trainer's Number</th>
                                        <th>Phone #</th>
                                        <th>Field of Expertice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <?php if(@$teacher->teacherDetails->upload): ?>
                                                        <!-- <img src="<?php echo e(asset($course->upload)); ?>" alt="<?php echo e($course->title); ?>" class="img-radius wid-40 align-top m-r-15"> -->
                                                        <img src="<?php echo e(asset($teacher->teacherDetails->upload)); ?>"
                                                            alt="<?php echo e($teacher->first_name); ?>"
                                                            class="img-radius wid-40 align-top m-r-15">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('assets/images/tesda.png')); ?>"
                                                            alt="user image"
                                                            class="img-radius wid-40 align-top m-r-15">
                                                    <?php endif; ?>

                                                    <div>
                                                        <h6 class="m-0">
                                                            <?php echo e(ucwords($teacher->first_name . ' ' . $teacher->middle_name . ' ' . $teacher->last_name)); ?>

                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo e($teacher->teacherDetails->accreditation_number); ?></td>
                                            <td><?php echo e($teacher->teacherDetails->contact); ?></td>
                                            <td><?php echo e($teacher->teacherDetails->course->title ?? 'N/A'); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#coursesTable').DataTable({
                    // Optional configurations can be added here
                    "paging": true,
                    "searching": true,
                    "ordering": false
                });
                $('#teachersTable').DataTable({
                    // Optional configurations can be added here
                    "paging": true,
                    "searching": true,
                    "ordering": false
                });

            });
        </script>
        <!-- [ Main Content ] end -->
    <?php else: ?>
        <div class="p-6">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Training's Information</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Training's Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div id="error-messages"></div>
            <div id="success-message" style="display: none"></div>
            <div class="grid grid-cols-1 gap-2 md:grid-cols-2 xl:grid-cols-3">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-2 flex justify-center" data-aos="fade-up" data-aos-delay="100">
                        <!-- Center the card -->
                        <article class="bg-green-500 rounded-xl shadow-lg flex flex-col h-full overflow-hidden w-80">
                            <!-- Set a fixed width -->
                            <div class="post-img p-2 flex-grow">
                                <?php if($course->upload): ?>
                                    <img src="<?php echo e(asset($course->upload)); ?>" alt="<?php echo e($course->title); ?>"
                                        class="w-full h-32 object-contain bg-center bg-cover">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/images/tesda.png')); ?>" alt="user image"
                                        class="w-full h-32 object-cover bg-center">
                                <?php endif; ?>
                            </div>
                            <div class="p-3 flex-grow">
                                <h5 class="text-lg font-extrabold text-white"><?php echo e($course->title); ?> <br> Batch
                                    <?php echo e($course->batch); ?>

                                </h5>
                                <p class="text-amber-300">Slots Left: <strong><?php echo e($course->remaining); ?></strong></p>

                                <?php
                                // Calculate the percentage
                                $data = $course->slots - $course->remaining;
                                $value = ($data / $course->slots) * 100;
                                ?>
                                <div class="progress mb-4" style="height: 20px;">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?php echo $value; ?>%;">
                                    </div>
                                </div>

                                <p class="text-gray-100 text-justify text-sm">
                                    <?php echo e($course->description); ?>

                                </p>
                                <div class="flex justify-between items-center mt-2">
                                    <div class="flex gap-1">
                                        <p class="text-gray-300 text-sm">Classes Start:</p>
                                        <p class="text-amber-300 text-sm">
                                            <time datetime="2022-01-01"><?php echo e($course->start_date); ?></time>
                                        </p>
                                    </div>
                                    <a href="<?php echo e(route('guest.form-fill-up', ['id' => $course->id])); ?>"
                                        class="flex gap-1 items-center p-2 rounded-md bg-amber-500 text-white hover:underline text-sm">
                                        <span>Enroll</span>
                                        <i class="feather icon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    <?php endif; ?>

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
<?php /**PATH D:\xampp\htdocs\smts\resources\views/dashboard.blade.php ENDPATH**/ ?>