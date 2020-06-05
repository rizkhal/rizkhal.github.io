<?php $__env->startSection('content'); ?><h3>Start write your amazing posts...</h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>