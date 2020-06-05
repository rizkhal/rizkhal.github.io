<?php $__env->startSection('content'); ?><p>What would a regex string look like if you were provided a random string such as :</p>

<pre><code class="language-javascript">let random = "u23ntfb23nnfj3mimowmndnwm8";
</code></pre>

<p>and I wanted to filter out certain characters such as 2, b, j, d, g, k and 8?</p>

<p>So in this case, the function would return <code>2bjd8</code>.</p>

<!-- ### Lets write code -->

<pre><code class="language-javascript">var random = "u23ntfb23nnfj3mimowmndnwm8";
var regexp = /[2bjd8]+/g;

alert((random.match(regexp) || []).join(''));
</code></pre>

<p>To get all the matches use <code>String.prototype.match()</code> with your Regex.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>