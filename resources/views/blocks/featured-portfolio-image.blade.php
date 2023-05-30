<div class="w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "select-none" : ""}}">
  <div class="w-lg xl:w-xl px-4 lg:px-0 h-full z-10 flex flex-wrap justify-center py-10">
    <h1 class="text-primary text-2xl lg:text-3xl w-full py-8 uppercase text-left">@field('featured_title_field')</h1>
    @hasfields('featured_images_field')
      @fields('featured_images_field')
        @hassub('featured_image_field')
        @php($featured = get_sub_field('featured_image_field'))
        <ul class="w-full flex justify-center gap-2">
          @foreach($featured as $featuredImage)
          <li id="portfolioImage" class="h-[428px] max-w-[352px] w-full bg-secondary list-none flex justify-center items-start">
            <div class="w-[316px] h-[316px] pt-[18px] flex flex-wrap justify-center">
              <div class="w-[316px] h-[316px] bg-cover bg-center mb-2" style="background-image: url({{get_the_post_thumbnail_url($featuredImage->ID)}})"></div>
            </div>
            <div id="portfolioImageLightbox" class="fixed hidden w-full h-full top-0 left-0 z-10 flex justify-center items-center">
              <div class="absolute w-[100vw] h-[100vh] bg-opacity-75 z-10 top-0 left-0 bg-black"></div>
              <div class="relative w-[80vw] h-[80vh] z-20 flex justify-center items-start">
                  <img class="w-auto h-full z-30" src="{{get_the_post_thumbnail_url($featuredImage->ID)}}" alt="">
                  
                  <span class="relative z-40 text-4xl text-secondary material-symbols-outlined cursor-pointer select-none">close</span>
              </div>
          </div>
          </li>
          @endforeach
        </ul>
        @endsub
      @endfields
    @endhasfields
  </div>
</div>