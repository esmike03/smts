<script src="<?php echo e(asset('assets/js/vendor-all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pcoded.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/sweetalert2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/axios.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>



<script src="<?php echo e(asset('assets/js/plugins/axios.min.js')); ?>"></script>

<!-- <script src="<?php echo e(asset('assets/jquery.min.js')); ?>"></script> -->
<script src="<?php echo e(asset('assets/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/jquery.signature.js')); ?>"></script>
<script src="<?php echo e(asset('assets/jquery.ui.touch-punch.js')); ?>"></script>
<script src="<?php echo e(asset('assets/jquery.ui.touch-punch.min.js')); ?>"></script>




<script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
</script>
<?php if($errors->any()): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const errorMessagesDiv = document.getElementById('error-messages');
        if (errorMessagesDiv) {
            let errorMessageHtml = `
                <div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            `;
            errorMessagesDiv.innerHTML = errorMessageHtml;

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1800,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Something went wrong!!"
            });
        }
    });
</script>
<?php endif; ?>

<?php if(session('success')): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessageDiv = document.getElementById('success-message');
        if (successMessageDiv) {
            const successMessage = <?php echo json_encode(session('success'), 15, 512) ?>; // Retrieve the success message from the session

            let successMessageHtml = `
                <div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
                    <div>${successMessage}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            successMessageDiv.innerHTML = successMessageHtml;

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1800,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: successMessage
            });
        }
    });
</script>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\smts\resources\views/layouts/script.blade.php ENDPATH**/ ?>