@extends('_layouts.master')

@section('body')

    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            <img src="{{ $featuredPost->cover_image ?? '/assets/img/post-cover-image-3.svg' }}" alt="{{ $page->title }} cover image" class="mb-2">
            
            <p class="text-gray-700 font-medium my-2">
                <span class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-2 px-3 pt-px">{{ $featuredPost->estimate_reading_time }}</span>{{ $featuredPost->getDate()->format('F j, Y') }} • ☕ 
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        <hr class="border-b my-6">
    @endforeach

    @foreach ($posts->where('featured', false)->take(4)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
