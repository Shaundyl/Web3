

<?php $__env->startSection('content'); ?>
    <h1>All Students</h1>
    <ul>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($student->studid); ?> - 
                <?php echo e($student->studfirstname); ?> - 
                <?php echo e($student->studlastname); ?> -
                <a href="<?php echo e(route('student.show', ['id' => $student->studid])); ?>">Show</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\Web3\laravel\usjr\resources\views/students/index.blade.php ENDPATH**/ ?>