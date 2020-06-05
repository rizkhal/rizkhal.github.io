<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="<?php echo e($page->siteName); ?> Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 <?php echo e($page->isActive('/blog') ? 'active text-blue-600' : ''); ?>">
        Blog
    </a>

    <a title="<?php echo e($page->siteName); ?> About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 <?php echo e($page->isActive('/about') ? 'active text-blue-600' : ''); ?>">
        About
    </a>

    <a title="<?php echo e($page->siteName); ?> Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 <?php echo e($page->isActive('/contact') ? 'active text-blue-600' : ''); ?>">
        Contact
    </a>

    <a title="<?php echo e($page->siteName); ?> Rss" href="https://rizkhal.github.io/sitemap.xml" target="_blank" 
        class="ml-6 text-gray-700 hover:text-blue-600">
        Rss
    </a>
</nav>
<?php /**PATH /home/noob/Public/Learn/rizkhal/source/_nav/menu.blade.php ENDPATH**/ ?>