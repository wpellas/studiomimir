<!-- /galleri -->
@php($id = get_page_by_title( 'galleri', '', 'page' )->ID)
@extends('layouts.app')
@section('content')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url($id)])

<section class="min-h-[100vh] flex justify-center">
    @query([
        'post_type' => 'portfolio_image',
        'posts_per_page' => -1,
        'orderby' => 'rand'
        ])
<div class="w-full lg:w-lg   h-full px-8 lg:px-0 font-primary text-primary text-center">
    <h1 class="text-2xl lg:text-4xl w-full py-8 uppercase">{{__("Portfolio")}}</h1>
    <ul class="relative flex flex-wrap after:flex-grow-[999] gap-2">
        @posts
            {{-- Small Format --}}
            <li class="block lg:hidden">
                <a href="{{get_the_post_thumbnail_url()}}" target="_blank">
                    <img class="h-full w-auto" src="{{get_the_post_thumbnail_url()}}" alt="">
                </a>
            </li>
            {{-- Large Format --}}
            <li id="portfolioImage" class="relative h-[400px] hidden lg:block select-none flex-grow flex-auto">
                <img class="h-full w-full object-cover cursor-pointer align-middle" src="{{get_the_post_thumbnail_url()}}" alt="">
                <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-10 flex justify-center items-center">
                    <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-10 top-0 left-0 bg-black"></div>
                    <div class="relative w-[80vw] h-[80vh] z-20 flex justify-center items-start">
                        <img class="w-auto h-full z-30" src="{{get_the_post_thumbnail_url()}}" alt="">
                        
                        <span class="relative z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none">close</span>
                    </div>
                </div>
            </li>
            @endposts
        </ul>

    </div>
</section>
@endsection