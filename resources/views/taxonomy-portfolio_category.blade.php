
@extends('layouts.app')

@section('content')
@php($term = get_queried_object())
@php($identifier = 'portfolio_category_' . $term->term_id)
@php($thumbnail = get_field('portfolio_category_image', $identifier))
@include('partials.page-header', ['thumbnail' => $thumbnail, 'identifier' => $identifier])

    @query([
        'post_type' => 'portfolio_image',
        'tax_query' => [
            [
                'taxonomy' => 'portfolio_category',
                'field' => 'slug',
                'terms' => $term->slug,
            ],
        ],
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ])

<section class="section min-h-[100vh] flex justify-center">
    <div class="w-full h-full lg:w-lg pt-8">
        <ul class="relative w-full lg:w-lg flex flex-wrap after:flex-grow-[999] gap-2">
            @posts
            @if(get_the_post_thumbnail_url())
        {{-- Small Format --}}
        <li class="block lg:hidden">
            <a href="{{get_the_post_thumbnail_url()}}" target="_blank">
                <img class="h-full w-auto" src="{{get_the_post_thumbnail_url(get_the_ID(), 'medium')}}" alt="portfolio_image">
             </a>
        </li>

        {{-- Large Format --}}
        <li id="portfolioImage" class="relative h-[400px] w-auto hidden lg:block select-none flex-grow flex-auto contains-img">
            <img id="jump-{{get_the_ID()}}" class="h-full w-full object-cover cursor-pointer transition-opacity duration-200" src="{{get_the_post_thumbnail_url(get_the_ID(), 'large')}}" alt="portfolio_image">
            <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-30 flex justify-center items-center">
                <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-30 top-0 left-0 bg-black"></div>
                <div class="relative w-[80vw] h-[80vh] z-30 flex justify-center items-start">
                    <div class="relative h-full flex justify-center items-center">
                        <img class="w-auto h-full z-40 !opacity-100" src="{{get_the_post_thumbnail_url(get_the_ID(), 'large')}}" alt="">
                        <span class="absolute -right-[2.25rem] -top-[2.25rem] z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none hover:text-red-400 transition-color duration-200">close</span>
                    </div>
                </div>
            </div>
         </li>
         @endif
        @endposts

        </ul>
    </div>
</section>
@endsection