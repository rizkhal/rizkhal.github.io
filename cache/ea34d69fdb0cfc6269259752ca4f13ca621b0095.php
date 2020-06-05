<?php $__env->slot('seo'); ?>
    <!-- open graph -->
    <meta property="og:title" content="<?php echo e($page->title); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="<?php echo e($page->description); ?>" />
    <meta property="og:image" content="<?php echo e($page->cover_image ?? 'https://rizkhal.github.io/assets/img/thumbnail.jpg'); ?>" />

    <?php $__currentLoopData = $page->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <meta property="category" content="<?php echo e($category); ?>"/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- twitter sumamry -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo e($page->description); ?>" />
    <meta name="twitter:title" content="<?php echo e($page->title); ?>" />
    <meta name="twitter:site" content="@rizkhal"/>
    <meta name="twitter:image" content="<?php echo e($page->cover_image ?? 'https://rizkhal.github.io/assets/img/thumbnail.jpg'); ?>" />
    <meta name="twitter:creator" content="@rizkhal" />
<?php $__env->endSlot(); ?>

<?php $__env->startSection('body'); ?>
    <img src="<?php echo e($page->cover_image ?? '/assets/img/post-cover-image-3.svg'); ?>" alt="<?php echo e($page->title); ?> cover image" class="mb-2">

    <h1 class="leading-none mb-2"><?php echo e($page->title); ?></h1>

    <p class="text-gray-700 text-md font-semibold md:mt-0">
        <span class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-2 px-3 pt-px"><?php echo e($page->estimate_reading_time); ?></span> 
        <?php echo e($page->author); ?>  •  <?php echo e(date('F j, Y', $page->date)); ?>  •  ☕ 
    </p>

    <?php if($page->categories): ?>
        <?php $__currentLoopData = $page->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a
                href="<?php echo e('/blog/categories/' . $category); ?>"
                title="View posts in <?php echo e($category); ?>"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            ><?php echo e($category); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            <?php if($next = $page->getNext()): ?>
                <a href="<?php echo e($next->getUrl()); ?>" title="Older Post: <?php echo e($next->title); ?>">
                    &LeftArrow; <?php echo e($next->title); ?>

                </a>
            <?php endif; ?>
        </div>

        <div>
            <?php if($previous = $page->getPrevious()): ?>
                <a href="<?php echo e($previous->getUrl()); ?>" title="Newer Post: <?php echo e($previous->title); ?>">
                    <?php echo e($previous->title); ?> &RightArrow;
                </a>
            <?php endif; ?>
        </div>
    </nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/noob/Public/Learn/rizkhal/source/_layouts/post.blade.php ENDPATH**/ ?>