<!-- /galleri -->
@php($id = get_page_by_title( 'galleri', '', 'page' )->ID)
@extends('layouts.app')
@section('content')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url($id, 'hero')])

<section>

    @query([
        'post_type' => 'portfolio_image',
        'posts_per_page' => -1,
        'orderby' => 'rand'
        ])

<div class="w-full lg:w-lg   h-full  px-4 lg:px-0 font-primary text-primary text-center">
    <h1 class="text-2xl lg:text-4xl w-full py-8 ">{{__("Portfolio", 'mimir')}}</h1>

    <ul class="relative flex flex-wrap after:flex-grow-[999] gap-2">
    @posts

    {{-- Small Format --}}
    <li class="block lg:hidden">
        <a href="{{get_the_post_thumbnail_url()}}" target="_blank">
            <img width="100%" height="100%" class="h-full w-auto" src="{{get_the_post_thumbnail_url(get_the_ID(), 'medium')}}" alt="{{get_the_title()}}">
        </a>
    </li>

    {{-- Large Format --}}
    <li id="portfolioImage" class="relative h-[400px] hidden lg:block select-none flex-grow flex-auto">
        <img width="100%" height="100%" class="h-full w-full object-cover cursor-pointer align-middle" src="{{get_the_post_thumbnail_url(get_the_ID(), 'portrait')}}" alt="{{get_the_title()}}">
        <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-10 flex justify-center items-center">
            <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-10 top-0 left-0 bg-black"></div>
            <div class="relative w-[80vw] h-[80vh] z-20 flex justify-center items-start">
                <img width="100%" height="100%" class="w-auto h-full z-30" src="{{get_the_post_thumbnail_url(get_the_ID(), 'portrait')}}" alt="{{get_the_title()}}">
                <span class="relative z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none">close</span>
            </div>
        </div>
    </li>

    @endposts
    </ul>

    </div>
</section>
@endsection