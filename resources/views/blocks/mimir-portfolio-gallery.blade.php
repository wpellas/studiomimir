<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
    <ul class="relative flex flex-wrap lg:block w-full lg:w-lg leading-[0] gap-2 columns-2 lg:columns-3">
        @hasfield('portfolio_gallery_field')
        @foreach($portfolio_gallery_field as $gallery_image)
        @if(!empty($gallery_image))
        {{-- Small Format --}}
        <li class="block lg:hidden w-full">
            <a href="{{get_the_post_thumbnail_url($gallery_image->ID)}}" target="_blank">
                <img class="h-full w-auto" src="{{get_the_post_thumbnail_url($gallery_image->ID)}}" alt="portfolio_image_{{get_the_title()}}">
            </a>
        </li>
        {{-- Large Format --}}
        <li id="portfolioImage" class="py-1 relative w-full h-auto hidden lg:block select-none contains-img">
            <img width="100%" height="100%" class="w-full h-auto object-cover align-bottom cursor-pointer transition-opacity duration-200" src="{{get_the_post_thumbnail_url($gallery_image->ID, 'portrait')}}" alt="portfolio_image_{{get_the_title()}}">
            <div id="portfolioImageLightbox" class="fixed opacity-0 invisible pointer-events-none scale-110 w-full h-full top-0 left-0 z-30 flex justify-center items-center transition-all duration-200">
                <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-30 top-0 left-0 bg-black"></div>
              <div class="relative w-[80vw] h-[80vh] z-30 flex justify-center items-start">
                  <div class="relative h-full w-auto flex justify-center items-center">
                    <img width="100%" height="100%" class="w-auto h-full z-40 !opacity-100 aspect-auto" src="{{get_the_post_thumbnail_url($gallery_image->ID, 'large')}}" alt="portfolio_image_{{get_the_title()}}_lightbox">
                    <i class="fa-solid fa-xmark absolute -right-[2.25rem] -top-[2.25rem] z-40 text-4xl text-secondary cursor-pointer select-none hover:text-red-400 transition-color duration-200"></i>
                </div>
            </div>
        </div>
    </li>
    @endif
    @endforeach
    @endfield
    </ul>
</div>