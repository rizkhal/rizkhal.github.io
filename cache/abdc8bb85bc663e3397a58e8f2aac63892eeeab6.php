<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 <?php echo e($page->isActive('/blog') ? 'active text-blue' : ''); ?>"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 <?php echo e($page->isActive('/about') ? 'active text-blue' : ''); ?>"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 <?php echo e($page->isActive('/contact') ? 'active text-blue' : ''); ?>"
            >Contact</a>
        </li>
        <li class="pl-4">
            <a
                target="_blank"
                title="<?php echo e($page->siteName); ?> Rss"
                href="https://rizkhal.github.io/sitemap.xml"
                class="nav-menu__item hover:text-blue-500"
            >Rss</a>
        </li>
    </ul>
</nav>
<?php /**PATH /home/noob/Public/Learn/rizkhal/source/_nav/menu-responsive.blade.php ENDPATH**/ ?>