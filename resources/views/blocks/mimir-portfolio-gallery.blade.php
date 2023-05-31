<ul class="relative w-full lg:w-lg flex flex-wrap after:flex-grow-[999] gap-2">
  @foreach($portfolio_gallery_field as $gallery_image)
      {{-- Small Format --}}
      <li class="block lg:hidden">
          <a href="{{get_the_post_thumbnail_url($gallery_image->ID)}}" target="_blank">
              <img class="h-full w-auto" src="{{get_the_post_thumbnail_url($gallery_image->ID)}}" alt="">
          </a>
      </li>
      {{-- Large Format --}}
      <li id="portfolioImage" class="relative h-[400px] w-auto hidden lg:block select-none flex-grow flex-auto">
          <img class="h-full w-full object-cover cursor-pointer align-middle" src="{{get_the_post_thumbnail_url($gallery_image->ID)}}" alt="">
          <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-10 flex justify-center items-center">
              <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-10 top-0 left-0 bg-black"></div>
              <div class="relative w-[80vw] h-[80vh] z-20 flex justify-center items-start">
                <div class="relative h-full flex justify-center items-center">
                    <img class="w-auto h-full z-30" src="{{get_the_post_thumbnail_url($gallery_image->ID)}}" alt="">
                    <span class="absolute -right-[2.25rem] top-0 z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none">close</span>
                </div>
              </div>
          </div>
      </li>
  @endforeach
</ul>