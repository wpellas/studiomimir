<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
  <div class="w-lg   px-4 lg:px-0 h-full z-10 flex flex-wrap lg:flex-nowrap py-10 gap-8 font-primary">
      <div class="h-[512px] w-full lg:w-1/2 py-2 lg:py-10 text-center flex flex-wrap justify-center items-stretch gap-4 text-lg">
          @if ($title_field)
          <h1 class="text-xl lg:text-2xl xl:text-3xl uppercase text-primary font-secondary">{{$title_field}}</h1>
          @endif
          @if ($body_field)
            {!!strip_tags($body_field, '<p>, <a>, <strong>, <em>')!!}
          @endif
      </div>
      @if($image_field)
        <div class="h-[512px] w-full lg:w-1/2 bg-cover bg-center" style="background-image: url({{$image_field['url']}})"></div>
      @endif
  </div>
</div>