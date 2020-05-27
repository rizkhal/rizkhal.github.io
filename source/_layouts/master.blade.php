<!DOCTYPE html>
<html lang="en">
    <head>
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
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        @include('_components.seo')

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/icon.svg">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            @include('_components.analitycs')
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="container flex items-center max-w-6xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-10 md:h-16 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                        <div class="block">
                            <h1 class="text-lg md:text-2xl text-blue-800 hover:text-blue-600 my-0">
                                Rizkhal <br> Lamaau
                            </h1>
                        </div>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://t.me/rizkhal" title="Rizkhal Lamaau">Rizkhal</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a target="_blank" href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a target="_blank" href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
