<!-- /hundar -->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])
<section>
    @content
    
    @query([
        'post_type' => 'dog_pedigree',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ])
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 font-primary text-primary text-center">
        <ul class="relative w-full h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @posts
    
    @if(!empty(get_field('pedigree_images')))
        @php($pedigreeImages = get_field('pedigree_images'))
    @endif
    @if(!empty($pedigreeImages[0]['pedigree_image']['sizes']['portrait']))
        @php($largePedigree = $pedigreeImages[0]['pedigree_image']['sizes']['portrait'])
        @php($breed = get_the_terms(get_the_ID(), 'dog_breed'))
        @php($titles = get_the_terms(get_the_ID(), 'dog_titles'))

    {{-- Small Format --}}
    <li class="w-full h-full block lg:hidden">
        <a class="w-full h-full cursor-pointer" href="{{the_permalink()}}">
            <img width="100%" height="100%" class="w-full h-full object-cover hover:opacity-60 cursor-pointer" src="{{$largePedigree}}" alt="{{get_the_title()}}">
        </a>
    </li>
    
    {{-- Large Format --}}
    <li id="dogPedigree" class="w-full h-full hidden lg:block contains-img">
        <img width="100%" height="100%" id="pedigreeImage" class="w-full h-[500px] object-cover hover:opacity-60 cursor-pointer transition-opacity duration-200" src="{{$largePedigree}}" alt="{{get_the_title()}}" aria-label="{{__('Öppna mer information om hunden', 'mimir')}}.">
        <div id="pedigreeContainer" class="hidden fixed z-30 top-0 left-0 w-full h-full flex justify-center items-center">
            <div id="pedigreeBackdrop" class="h-full w-full absolute bg-black opacity-75 z-30"></div>
            <div class="z-30 bg-secondary lg:w-lg relative">
                <div id="pedigreeExit" class="absolute top-0 right-1 z-40 cursor-pointer">
                    <i class="fa-solid fa-xmark z-30 text-5xl transition-colors duration-200 hover:text-black"></i>
                </div>
                <div class="p-4 flex flex-wrap gap-4">

                    <div class="w-full h-[500px] flex gap-4">

                    <div class="relative w-full h-full">
                        <img width="100%" height="100%" id="pedigreeImageBig" class="w-full h-[500px] object-cover object-top !opacity-100" src="{{$largePedigree}}" alt="{{get_the_title()}}">
                        <div class="absolute bottom-0 pt-2 w-full h-[30px] flex justify-center items-center bg-secondary">
                            <i id="pedigreePrevious" class="fa-solid fa-chevron-left text-2xl px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black"></i>
                            <p class="text-zinc-800 select-none font-secondary text-2xl"><span id="pedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                            <i id="pedigreeNext" class="fa-solid fa-chevron-right text-2xl px-1 select-none cursor-pointer transition-colors duration-200 hover:text-black"></i>
                        </div>
                    </div>

                    <div class="relative w-full text-left">
                        <a class="text-5xl font-secondary text-primary" href="{{the_permalink()}}">@title</a>
                        <h3 class="pt-2 text-lg italic text-zinc-800">@field('pedigree_name')</h3>
                        <p class="text-sm font-secondary !pt-0 !pb-0 border-b-[1px] border-primary border-dotted">
                            @if(!empty($titles))
                                @foreach($titles as $title)
                                    {{$title->name}}
                                @endforeach
                            @endif
                        </p>
                        <div class="pt-2 text-base leading-6">{!!strip_tags(get_field('pedigree_description'), '<p>, <a>, <strong>, <em>')!!}</div>
                        @if(get_field('dog_owner'))
                            <h5 class="absolute bottom-0 text-sm italic text-zinc-800 font-secondary">Ägare: @field('dog_owner')</p>
                        @endif
                        </div>
                    </div>

                    <div class="w-full">
                        <ul class="flex w-full h-40">
                            @foreach ($pedigreeImages as $pedigreeImage)
                                <li id="pedigreeImageSmall" class="w-full h-full hover:opacity-60 cursor-pointer border-primary transition-opacity duration-200">
                                    <img width="100%" height="100%" class="w-full h-full object-cover object-top !opacity-100" src="{{$pedigreeImage['pedigree_image']['sizes']['portrait']}}" alt="{{get_the_title()}}" aria-label="{{__('Klicka för att se denna bild i ett större format', 'mimir')}}.">
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </li>
    @endif

        @endposts
        </ul>
    </div>
</section>
