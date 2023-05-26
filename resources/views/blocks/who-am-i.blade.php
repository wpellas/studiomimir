<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
  <div class="w-[1024px] h-full z-10 flex py-10 gap-8 font-primary">
      <div class="h-[512px] w-full lg:w-1/2 py-2 lg:py-10 text-center flex flex-wrap justify-center items-stretch gap-4 text-lg">
          @if ($title)
          <h1 class="text-lg lg:text-2xl xl:text-3xl uppercase text-primary">{{$title}}</h1>
          @endif
          @if ($body)
            {!!strip_tags($body, '<p>, <a>, <strong>, <em>')!!}
          @endif
      </div>
      @if($image)
        <div class="h-[512px] w-full lg:w-1/2 bg-cover bg-center" style="background-image: url({{$image['url']}})"></div>
      @endif
  </div>
</div>