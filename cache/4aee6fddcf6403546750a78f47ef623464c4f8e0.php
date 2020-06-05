<?php $__env->startSection('content'); ?><p>A function is called <strong>nested</strong> when it is created inside another function, it is easily possible to do this with javascript. We can use it to organize our code, like this:</p>

<pre><code class="language-javascript">function sayHiBye(firstName, lastName) {

  // helper nested function to use below
  function getFullName() {
    return firstName + " " + lastName;
  }

  alert( "Hello, " + getFullName() );
  alert( "Bye, " + getFullName() );

}
</code></pre>

<p>Here the nested function <code>getFullName()</code> is made for convenience. It can access the outer variables and so can return the full name. Nested functions are quite common in javascript.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>