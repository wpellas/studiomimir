@extends('layouts.app')

@section('content')
  @include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url()])

  <section class="section min-h-[100vh] flex justify-center">
    <div class="w-full lg:w-lg pt-8">
        <ul class="relative w-full lg:w-lg px-4 lg:px-0 flex flex-wrap after:flex-grow-[999] gap-2">
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
        <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-30 flex justify-center items-center">
            <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-30 top-0 left-0 bg-black"></div>
            <div class="relative w-[80vw] h-[80vh] z-30 flex justify-center items-start">
              <div class="relative h-full flex justify-center items-center">
                  <img class="w-auto h-full z-40" src="{{get_the_post_thumbnail_url()}}" alt="">
                  <span class="absolute -right-[2.25rem] -top-[2.25rem] z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none hover:text-red-400">close</span>
              </div>
            </div>
        </div>
    </li>
            @endposts
        </ul>
    </div>
    </section>
@endsection