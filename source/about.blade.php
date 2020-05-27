@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <section class="flex-col justify-center items-center text-center mb-20">

        <img src="/assets/img/me.jpg"
            alt="Rizkhal Lamaau"
            class="inline-flex rounded-full h-40 w-40 bg-contain mx-auto">

        <h1 class="md:text-2xl">I'm Rizkhal Lamaau. <br>
            Web Developer and Freelance
        </h1>

        <p>Currently, I working at <a href="#">GoCode</a>.</p>

        {{-- <p>I'm co-founding <a href="https://okcindiehackers.com/">OKC Indie Hackers</a> to help build indie software that makes the world better.</p>

        <p>I review the best books I'm reading and share key learnings with the world in my free, "Just The Good Parts" <a href="/notes">book
                notes.</a></p> --}}

        @include('_components.social-links')

    </section>
@endsection
