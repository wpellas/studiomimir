<!-- /page-webbshop (template)-->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])
<section class="min-h-[100vh] flex justify-center">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 font-primary text-black">
        @content

        <ul class="w-full font-secondary text-xl flex gap-2 justify-center items-center flex-nowrap text-primary uppercase text-center py-8">
            <li class="flex-1"><a class="text-primary" href="">Allt</a></li>
            <li class="flex-1 border-b-[1px] border-primary">Printables</li>
            <li class="flex-1">Foton</li>
            <li class="flex-1">Presets</li>
            <li class="flex-1">Mallar</li>
        </ul>
        @php($paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1)
        @query([
            'post_type' => 'portfolio_image',
            'posts_per_page' => 9,
            'paged' => $paged,
        ])

        <div class="w-full h-full">
            <ul class="w-full h-full grid grid-cols-3 grid-rows-3 gap-2">
                @posts
                <li class="w-full h-full pb-4 webshop">
                    <a href="{{the_permalink()}}">
                        <img width="100%" height="100%" class="h-auto w-full aspect-square object-cover object-center" src="{{get_the_post_thumbnail_url()}}" alt="{{get_the_title()}}">
                        <div class="w-full text-center">
                            <h1 class="text-lg text-primary uppercase font-secondary">Produktnamn</h1>
                            <p class="text-base text-black">1039 SEK</p>
                        </div>
                    </a>
                </li>
                @endposts
            </ul>
        </div>
        <div class="w-full flex justify-center gap-4 font-secondary text-center text-2xl webshop-pagination">
            {!!paginate_links(array(
                'base' => str_replace(999, '%#%', get_pagenum_link(999)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $query->max_num_pages,
                'next_text' => '>',
                'prev_text' => '<',
                ))!!}
        </div>
    </div>
</section>
