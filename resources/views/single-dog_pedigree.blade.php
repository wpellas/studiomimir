@php($id = get_page_by_title( 'hundar', '', 'page' )->ID)
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url($id, 'hero')])

<section>
    <div class="px-4 lg:px-0 w-full lg:w-lg h-full flex flex-wrap justify-center items-center text-primary">

    @hasfield('pedigree_images')
    @php($pedigreeImages = get_field('pedigree_images'))
    @php($breed = get_the_terms(get_the_ID(), 'dog_breed'))
    @php($titles = get_the_terms(get_the_ID(), 'dog_titles'))
    <div class="w-full lg:w-lg h-full">
    <div class="top-0 left-0 w-full h-full flex justify-center items-center">
        <div class="w-full lg:w-lg relative">
            <div class="pt-8">
                <div class="w-full h-full flex flex-wrap lg:flex-nowrap gap-4">

                    <div class="w-full h-full">
                        <h1 class="text-5xl lg:hidden flex items-center gap-2">
                            @title
                            @hasfield('gender')
                                @if(get_field('gender') === 'male')
                                    <i class="fa-solid fa-mars text-black text-lg"></i>
                                @else
                                    <i class="fa-solid fa-venus text-black text-lg"></i>
                                @endif
                            @endfield
                        </h1>
                        <h3 class="pt-2 text-lg italic text-zinc-800 lg:hidden block pb-2">@field('pedigree_name') </h3>
                        <p class="text-sm font-secondary lg:hidden block pb-2">
                            @if(!empty($titles))
                                @foreach($titles as $title)
                                    {{$title->name}}
                                @endforeach
                            @endif
                        </p>
                        <div class="relative">
                            <img width="100%" height="100%" id="singlePedigreeImageBig" class="w-full h-full aspect-square object-scale-down !opacity-100" src="{{$pedigreeImages[0]['pedigree_image']['url']}}" alt="{{get_the_title()}}">
                            <p class="hidden lg:block absolute bottom-0 bg-white p-1 rounded-tr-md text-zinc-800 select-none font-primary text-2xl"><span id="singlePedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                        </div>
                        <div class="w-full h-[30px] flex justify-center items-center text-3xl lg:text-2xl pt-4 lg:pt-0 lg:hidden">
                            <i id="singlePedigreePrevious" class="fa-solid fa-chevron-left px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black" aria-label="{{__('Klicka för att se föregående bild på hunden', 'mimir')}}."></i>
                            <p class="text-zinc-800 select-none font-primary"><span id="singlePedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                            <i id="singlePedigreeNext" class="fa-solid fa-chevron-right px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black" aria-label="{{__('Klicka för att se nästa bild på hunden', 'mimir')}}."></i>
                        </div>
                    </div>
                    <div class="relative w-full text-left">
                        <h1 class="text-5xl hidden lg:flex items-center gap-2">
                            @title
                            @hasfield('gender')
                                @if(get_field('gender') === 'male')
                                    <i class="fa-solid fa-mars text-black text-lg"></i>
                                @else
                                    <i class="fa-solid fa-venus text-black text-lg"></i>
                                @endif
                            @endfield
                        </h1>
                        <h3 class="pt-2 text-lg italic text-zinc-800 hidden lg:block">@field('pedigree_name') </h3>
                        <p class="text-sm font-secondary !pt-0 !pb-0 border-b-[1px] border-primary border-dotted hidden lg:block">
                            @if(!empty($titles))
                                @foreach($titles as $title)
                                    {{$title->name}}
                                @endforeach
                            @endif
                        </p>
                        <div class="pt-4 text-base leading-6">{!!strip_tags(get_field('pedigree_description'), '<p>, <a>, <strong>, <em>')!!}</div>
                        @hasfield('instagram_field')
                            <a class="lg:absolute bottom-0 right-0 pr-1 flex items-center gap-1 flex-nowrap text-lg lg:text-2xl text-black hover:text-primary hover:scale-105 transition-all duration-200" href="https://www.instagram.com/@field('instagram_field')" target="_blank"><i class="fa-brands fa-instagram"></i><span>@field('instagram_field')</span></a>
                        @endfield
                    </div>

                </div>
                <div class="w-full pt-4 hidden lg:flex flex-nowrap items-center text-4xl relative">

                    <i id="singlePedigreePrevious" class="fa-solid fa-chevron-left absolute -left-8 px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black" aria-label="{{__('Klicka för att se föregående bild på hunden', 'mimir')}}."></i>
                    <ul class="flex gap-[6.4px] w-full h-40">
                        @foreach ($pedigreeImages as $pedigreeImage)
                        <li id="singlePedigreeImageSmall" class="w-full h-full hover:opacity-60 cursor-pointer border-primary transition-opacity duration-200">
                            <img width="100%" height="100%" class="w-full h-full aspect-square object-cover object-center !opacity-100" src="{{$pedigreeImage['pedigree_image']['sizes']['portrait']}}" alt="{{get_the_title()}}" aria-label="{{__('Klicka för att se denna bild i ett större format', 'mimir')}}.">
                        </li>
                        @endforeach
                    </ul>
                    <i id="singlePedigreeNext" class="fa-solid fa-chevron-right absolute -right-8  px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black" aria-label="{{__('Klicka för att se nästa bild på hunden', 'mimir')}}."></i>

                </div>
            </div>
        </div>
    </div>

    <a class="w-full pt-8 text-black flex items-center flex-nowrap" href="{{home_url() . '/hundar'}}">
        <i class="fa-solid fa-arrow-left-long"></i>
        <p class="text-black">&nbsp;{{__('Tillbaka till', 'mimir')}}<span class="text-primary">&nbsp;{{__('Hundar', 'mimir')}}</span></p>.
    </a>

    </div>
    @endfield

</div>
</section>