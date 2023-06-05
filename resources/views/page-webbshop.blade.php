<!-- /page-webbshop-->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url()])
<section class="min-h-[100vh] flex justify-center">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 font-primary text-black">
        @content

        <ul class="w-full font-secondary text-xl flex gap-2 justify-center items-center flex-nowrap text-primary uppercase text-center py-8">
            <li class="flex-1">Allt</li>
            <li class="flex-1 border-b-[1px] border-primary">Printables</li>
            <li class="flex-1">Foton</li>
            <li class="flex-1">Presets</li>
            <li class="flex-1">Mallar</li>
        </ul>

        @query([
            'post_type' => 'portfolio_image',
            'posts_per_page' => 9,
            'paged' => get_query_var( 'paged' ),
        ])

        <div class="w-full h-full">
            <ul class="w-full h-full grid grid-cols-3 grid-rows-3 gap-2">
                @posts
                <li class="w-full h-full pb-4">
                    <a href="{{the_permalink()}}">
                        <img class="h-auto w-full aspect-square object-cover object-center" src="{{get_the_post_thumbnail_url()}}" alt="">
                        <div class="w-full text-center">
                            <h1 class="text-lg text-primary uppercase font-secondary">Produktnamn</h1>
                            <p class="text-base text-black">1039 SEK</p>
                        </div>
                    </a>
                </li>
                @endposts
            </ul>
        </div>
        @dump(is_paged())
        @dump(the_posts_pagination())
        
    </div>
</section>
