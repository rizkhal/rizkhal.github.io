<?php $__env->startSection('content'); ?><p>Distribute the operator to eliminate duplicate values, with javascript we only need to write one line of code like this:</p>

<pre><code class="language-javascript">const array = [1, 2, 3, 2, 3, 1];
[...new Set(array)]; // spread operator to get rid of duplicate value
// result = [1, 2, 3];
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>