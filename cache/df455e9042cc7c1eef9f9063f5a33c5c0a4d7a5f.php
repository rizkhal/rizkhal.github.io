<?php if(isset($seo)): ?>
    <?php echo e($seo); ?>

<?php else: ?>
    <!-- open graph -->
    <meta property="og:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="<?php echo e($page->siteDescription); ?>" />
    <meta property="og:image" content="https://rizkhal.github.io/assets/img/thumbnail.jpeg" />

    <!-- twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo e($page->siteDescription); ?>" />
    <meta name="twitter:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>" />
    <meta name="twitter:site" content="@rizkhal"/>
    <meta name="twitter:image" content="https://rizkhal.github.io/assets/img/thumbnail.jpeg" />
    <meta name="twitter:creator" content="@rizkhal" />
<?php endif; ?>

<script type='application/ld+json'>
    {
        "@context":"http:\/\/schema.org",
        "@type":"WebSite",
        "@id":"#website",
        "url":"https:\/\/rizkhal.github.io\/",
        "name":"rizkhal.github.io",
        "alternateName":"A blog on modern PHP and Laravel"
    }

</script>
<script type='application/ld+json'>
    {
        "@context":"http:\/\/schema.org",
        "@type":"Person",
        "sameAs":["https:\/\/twitter.com\/7rizkhal"],
        "@id":"#person",
        "name":"Rizkhal Lamaau"
    }
</script>
<?php /**PATH /home/noob/Public/Learn/rizkhal/source/_components/seo.blade.php ENDPATH**/ ?>