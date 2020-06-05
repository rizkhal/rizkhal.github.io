<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N6TTVWT');</script>
        <!-- End Google Tag Manager -->

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="author" content="Rizkhal">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="True">
        <meta name="Classification" content="Technology">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="robots" content="archive,follow,imageindex,index,odp,snippet,translate"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="HTML, CSS, JavaScript, Php, Laravel, Rizkhal, Programming, Web Programming">
        <meta name="description" content="<?php echo e($page->meta_description ?? $page->siteDescription); ?>">
        <meta name="google-site-verification" content="lOoXlUB7Hl1L4JT2OW4Q1O52aKP1wfO8HytQar-bWUc" />

        <?php echo $__env->make('_components.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <title><?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/icon.svg">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="<?php echo e($page->siteName); ?> Atom Feed">

        <?php echo $__env->yieldPushContent('meta'); ?>

        <?php if($page->production): ?>
            <?php echo $__env->make('_components.analitycs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(mix('css/main.css', 'assets/build')); ?>">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6TTVWT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="container flex items-center max-w-6xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="<?php echo e($page->siteName); ?> home" class="inline-flex items-center">
                        <img class="h-10 md:h-16 mr-3" src="/assets/img/logo.svg" alt="<?php echo e($page->siteName); ?> logo" />

                        <div class="block">
                            <h1 class="text-lg md:text-2xl text-blue-800 hover:text-blue-600 my-0">
                                Rizkhal <br> Lamaau
                            </h1>
                        </div>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    <?php echo $__env->make('_nav.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('_nav.menu-toggle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </header>

        <?php echo $__env->make('_nav.menu-responsive', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://t.me/rizkhal" title="Rizkhal Lamaau">Rizkhal</a> <?php echo e(date('Y')); ?>.
                </li>

                <li>
                    Built with <a target="_blank" href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a target="_blank" href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="<?php echo e(mix('js/main.js', 'assets/build')); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /home/noob/Public/Learn/rizkhal/source/_layouts/master.blade.php ENDPATH**/ ?>