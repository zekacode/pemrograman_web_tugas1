

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Dashboard</h1>
    <p>Selamat datang di dashboard admin!</p>
    <div class="alert alert-success" role="alert">
        You are logged in!
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        console.log('Dashboard script loaded!');
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Zakki\Documents\Unesa File\Semester 4\Pemrograman Web\tugas1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>