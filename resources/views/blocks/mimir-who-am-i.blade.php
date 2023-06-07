<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-lg   px-4 lg:px-0 h-full z-10 flex flex-wrap lg:flex-nowrap py-10 gap-8 font-primary">
      <div class=" w-full lg:w-1/2 py-2 lg:py-10 text-center flex flex-wrap justify-center items-stretch gap-4 text-lg">

        @if ($title_field)
          <h1 class="text-2xl lg:text-4xl uppercase text-primary font-secondary">{{$title_field}}</h1>
        @endif

        @if ($body_field)
            {!!strip_tags($body_field, '<p>, <a>, <strong>, <em>')!!}
        @endif

      </div>

      @if($image_field)
        <img width="100%" height="100%" class="h-auto w-full lg:w-1/2 object-cover object-center" src="{{$image_field['sizes']['large']}}" alt="who_am_i_image">
      @endif

  </div>
</div>