@extends('_layouts.master')

@slot('seo')
    <!-- open graph -->
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:image" content="{{ $page->cover_image ?? 'https://rizkhal.github.io/assets/img/thumbnail.jpg' }}" />

    @foreach($page->categories as $category)
        <meta property="category" content="{{ $category }}"/>
    @endforeach

    <!-- twitter sumamry -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{ $page->description }}" />
    <meta name="twitter:title" content="{{ $page->title }}" />
    <meta name="twitter:site" content="@rizkhal"/>
    <meta name="twitter:image" content="{{ $page->cover_image ?? 'https://rizkhal.github.io/assets/img/thumbnail.jpg' }}" />
    <meta name="twitter:creator" content="@rizkhal" />
@endslot

@section('body')
    <img src="{{ $page->cover_image ?? '/assets/img/post-cover-image-3.svg' }}" alt="{{ $page->title }} cover image" class="mb-2">

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-700 text-xl md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }} • ☕</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
