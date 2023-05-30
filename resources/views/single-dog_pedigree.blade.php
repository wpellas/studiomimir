@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => 'https://cdn.discordapp.com/attachments/537909129952624640/1112648478133334066/pexels-simona-kidric-2607544.jpg'])

<section class="min-h-[100vh]">
    <div class="w-full h-full flex justify-center items-center text-primary">

    @php($pedigreeImages = get_field('pedigree_images'))
    <div class="w-full lg:w-lg xl:w-xl h-full px-8 lg:px-0">
    <div class="z-20 top-0 left-0 w-full h-full flex justify-center items-center">
        <div class="z-30 lg:w-lg xl:w-xl relative">
            <div class="pt-8">
                <div class="w-full h-full flex gap-4">
                    <div class="w-full h-full">
                        <div id="singlePedigreeImageBig" class="w-full min-h-[700px] bg-cover bg-center" style="background-image: url({{$pedigreeImages[0]['pedigree_image']}})">
                            
                        </div>
                        <div class="w-full h-[30px] flex justify-center items-center">
                            <span id="singlePedigreePrevious" class="material-symbols-outlined select-none cursor-pointer">arrow_back_ios</span>
                            <p class="text-zinc-800 select-none"><span id="pedigreeImageNumber">1</span>/{{count($pedigreeImages)}}</p>
                            <span id="singlePedigreeNext" class="material-symbols-outlined select-none cursor-pointer">arrow_forward_ios</span>
                    </div>
                </div>
                <div class="relative w-full text-left">
                    <h1 class="text-5xl">@title</h1>
                    <h3 class="pt-2 text-lg italic text-zinc-800">@field('pedigree_name') </h3>
                    <div class="pt-4 text-base leading-6">{!!strip_tags(get_field('pedigree_description'), '<p>, <a>, <strong>, <em>')!!}</div>
                    @if(get_field('dog_owner'))
                    <h5 class="absolute bottom-0 text-sm italic text-zinc-800">Ägare: @field('dog_owner')</p>
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
    <p class="pt-8 text-black">{{__('Tillbaka till')}} <a class="text-primary" href="{{home_url() . '/hundar'}}">{{__('Hundar')}}</a>.</p>
</div>

</div>
</section>