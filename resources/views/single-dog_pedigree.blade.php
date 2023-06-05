@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => 'https://cdn.discordapp.com/attachments/537909129952624640/1112648478133334066/pexels-simona-kidric-2607544.jpg'])

<section class="min-h-[100vh] flex justify-center items-center">
    <div class="w-full lg:w-lg h-full flex flex-wrap justify-center items-center text-primary">

    @php($pedigreeImages = get_field('pedigree_images'))
    <div class="w-full lg:w-lg   h-full  px-4 lg:px-0">
    <div class="top-0 left-0 w-full h-full flex justify-center items-center">
        <div class="w-full lg:w-lg relative">
            <div class="pt-8">
                <div class="w-full h-full flex flex-wrap lg:flex-nowrap gap-4">
                    <div class="w-full h-full">
                        <h1 class="text-5xl lg:hidden block">@title</h1>
                        <h3 class="pt-2 text-lg italic text-zinc-800 lg:hidden block pb-2">@field('pedigree_name') </h3>
                        <img id="singlePedigreeImageBig" class="w-full h-[480px] object-cover object-center !opacity-100" src="{{$pedigreeImages[0]['pedigree_image']['url']}}">
                        <div class="w-full h-[30px] flex justify-center items-center text-3xl lg:text-2xl pt-4 lg:pt-0">
                            <span id="singlePedigreePrevious" class="material-symbols-outlined select-none cursor-pointer text-3xl lg:text-2xl">arrow_back_ios</span>
                            <p class="text-zinc-800 select-none"><span id="singlePedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                            <span id="singlePedigreeNext" class="material-symbols-outlined select-none cursor-pointer text-3xl lg:text-2xl">arrow_forward_ios</span>
                        </div>
                    </div>
                    <div class="relative w-full text-left">
                        <h1 class="text-5xl hidden lg:block">@title</h1>
                        <h3 class="pt-2 text-lg italic text-zinc-800 hidden lg:block">@field('pedigree_name') </h3>
                        <div class="pt-4 text-base leading-6">{!!strip_tags(get_field('pedigree_description'), '<p>, <a>, <strong>, <em>')!!}</div>
                        @if(get_field('dog_owner'))
                        <h5 class="text-sm italic text-zinc-800">Ägare: @field('dog_owner')</p>
                        @endif
                    </div>
                </div>
                <div class="w-full pt-4 hidden lg:block">
                    <ul class="flex gap-[6.4px] w-full h-40">
                        @foreach ($pedigreeImages as $pedigreeImage)
                        <li id="singlePedigreeImageSmall" class="w-full h-full bg-cover bg-center hover:opacity-60 cursor-pointer border-primary transition-opacity duration-200">
                            <img class="w-full h-full object-cover object-center !opacity-100" src="{{$pedigreeImage['pedigree_image']['sizes']['large']}}" alt="">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="w-full pt-8 text-black flex items-center">
        <span class="material-symbols-outlined">keyboard_return</span>
        &nbsp;{{__('Tillbaka till')}} <a class="text-primary" href="{{home_url() . '/hundar'}}">&nbsp;{{__('Hundar')}}</a>.
    </p>
</div>

</div>
</section>