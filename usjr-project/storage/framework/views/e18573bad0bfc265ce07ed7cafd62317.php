

<?php $__env->startSection('content'); ?>
    <h1>Student Details</h1>
    <p><strong>Name:</strong> <?php echo e($student->full_name); ?></p>
    <p><strong>College ID:</strong> <?php echo e($student->studcollid); ?></p>
    <p><strong>Program ID:</strong> <?php echo e($student->studprogid); ?></p>
    <p><strong>Year:</strong> <?php echo e($student->studyear); ?></p>
    <a href="<?php echo e(url('/show/students/all')); ?>">Back to All Students</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\usjr\resources\views/students/show.blade.php ENDPATH**/ ?>