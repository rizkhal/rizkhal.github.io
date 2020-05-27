@isset($seo)
    {{ $seo }}
@else
    <!-- open graph -->
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteDescription }}" />
    <meta property="og:image" content="https://rizkhal.github.io/assets/img/thumbnail.jpeg" />

    <!-- twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{ $page->siteDescription }}" />
    <meta name="twitter:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta name="twitter:site" content="@rizkhal"/>
    <meta name="twitter:image" content="https://rizkhal.github.io/assets/img/thumbnail.jpeg" />
    <meta name="twitter:creator" content="@rizkhal" />
@endisset

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
