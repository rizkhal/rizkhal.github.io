<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="About <?php echo e($page->siteName); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="A little bit about <?php echo e($page->siteName); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
    <section class="flex-col justify-center items-center text-center mb-20">

        <img src="/assets/img/me.jpg"
            alt="Rizkhal Lamaau"
            class="inline-flex rounded-full h-40 w-40 bg-contain mx-auto">

        <h1 class="md:text-2xl">I'm Rizkhal Lamaau. <br>
            Web Developer and Freelance
        </h1>

        <p>Currently, I working at <a href="#">GoCode</a>.</p>

        

        <?php echo $__env->make('_components.social-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/noob/Public/Learn/rizkhal/source/about.blade.php ENDPATH**/ ?>