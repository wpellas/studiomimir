<!-- /portfolio_image -->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => 'https://cdn.discordapp.com/attachments/537909129952624640/1112648478133334066/pexels-simona-kidric-2607544.jpg'])
<section class="min-h-[100vh] flex justify-center">
    @content
    @query([
        'post_type' => 'dog_pedigree',
        'posts_per_page' => -1,
        'orderby' => 'rand'
    ])
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 font-primary text-primary text-center">
        <h1 class="text-2xl lg:text-4xl w-full py-8 uppercase">{{__("Hundar")}}</h1>
        <ul class="relative w-full h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
    @posts
    
    @php($pedigreeImages = get_field('pedigree_images'))
    @php($breed = get_the_terms(get_the_ID(), 'dog_breed'))
    @php($titles = get_the_terms(get_the_ID(), 'dog_titles'))
    {{-- Small Format --}}
    <li class="w-full h-full block lg:hidden">
        <a class="w-full h-full cursor-pointer" href="{{the_permalink()}}">
            <img class="w-full h-full object-cover hover:opacity-60 cursor-pointer" src="{{$pedigreeImages[0]['pedigree_image']}}" alt="">
        </a>
    </li>
    {{-- Large Format --}}
    <li id="dogPedigree" class="w-full h-full hidden lg:block">
        <img id="pedigreeImage" class="w-full h-[500px] object-cover hover:opacity-60 cursor-pointer" src="{{$pedigreeImages[0]['pedigree_image']}}" alt="">
        <div id="pedigreeContainer" class="hidden fixed z-20 top-0 left-0 w-full h-full flex justify-center items-center">
            <div id="pedigreeBackdrop" class="h-full w-full absolute bg-black opacity-75 z-20"></div>
            <div class="z-30 bg-secondary lg:w-lg   relative">
                <div id="pedigreeExit" class="absolute top-0 right-0 z-40 cursor-pointer">
                    <span class="material-symbols-outlined z-30 text-5xl transition-all delay-200 hover:text-red-700">close</span>
                </div>
                <div class="p-4">
                    <div class="w-full h-[500px] flex gap-4">
                        <div class="w-full h-full">
                            <div id="pedigreeImageBig" class="w-full h-[480px] bg-cover bg-center" style="background-image: url({{$pedigreeImages[0]['pedigree_image']}})">
                                
                            </div>
                            <div class="w-full h-[30px] flex justify-center items-center">
                            <span id="pedigreePrevious" class="material-symbols-outlined select-none cursor-pointer">arrow_back_ios</span>
                            <p class="text-zinc-800 select-none font-secondary"><span id="pedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                            <span id="pedigreeNext" class="material-symbols-outlined select-none cursor-pointer">arrow_forward_ios</span>
                        </div>
                    </div>
                    <div class="relative w-full text-left">
                        <a class="text-5xl font-secondary" href="{{the_permalink()}}">@title</a>
                        <h3 class="pt-2 text-lg italic text-zinc-800">@field('pedigree_name')</h3>
                        <h5 class="font-secondary">
                            @if($titles)
                                @foreach($titles as $title)
                                    {{$title->name}}
                                @endforeach
                            @endif
                        </h5>
                        <div class="pt-4 text-base leading-6">{!!strip_tags(get_field('pedigree_description'), '<p>, <a>, <strong>, <em>')!!}</div>
                        @if(get_field('dog_owner'))
                            <h5 class="absolute bottom-0 text-sm italic text-zinc-800 font-secondary">Ägare: @field('dog_owner')</p>
                        @endif
                        </div>
                    </div>
                    <div class="w-full pt-4">
                        <ul class="flex gap-[6.4px] w-full h-40">
                            @foreach ($pedigreeImages as $pedigreeImage)
                                <li id="pedigreeImageSmall" class="w-full h-full bg-cover bg-center hover:opacity-60 cursor-pointer border-primary" style="background-image: url({{$pedigreeImage['pedigree_image']}})"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endposts
        </ul>
    </div>
</section>
