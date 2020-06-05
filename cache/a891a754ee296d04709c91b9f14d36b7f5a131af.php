<div class="flex flex-col mb-4">
    <p class="text-gray-700 font-medium my-2">
        <span class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-2 px-3 pt-px"><?php echo e($post->estimate_reading_time); ?></span><?php echo e($post->getDate()->format('F j, Y')); ?> • ☕
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="<?php echo e($post->getUrl()); ?>"
            title="Read more - <?php echo e($post->title); ?>"
            class="text-gray-900 font-extrabold"
        ><?php echo e($post->title); ?></a>        
    </h2>

    <p class="mb-4 mt-0"><?php echo $post->getExcerpt(200); ?></p>

    <a
        href="<?php echo e($post->getUrl()); ?>"
        title="Read more - <?php echo e($post->title); ?>"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
<?php /**PATH /home/noob/Public/Learn/rizkhal/source/_components/post-preview-inline.blade.php ENDPATH**/ ?>