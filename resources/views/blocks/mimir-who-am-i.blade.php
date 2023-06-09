<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-full lg:w-lg h-full z-10 flex flex-wrap lg:flex-nowrap gap-8 font-primary">
      <div class=" w-full lg:w-1/2 text-center flex flex-wrap justify-center items-stretch gap-4 text-lg">

        @hasfield('title_field')
          <h1 class="text-2xl lg:text-4xl  text-primary font-secondary">@field('title_field')</h1>
        @endfield

        @hasfield('body_field')
            {!!strip_tags($body_field, '<p>, <a>, <strong>, <em>')!!}
        @endfield

      </div>

      @hasfield('image_field')
        <img width="100%" height="100%" class="h-auto w-full lg:w-1/2 object-cover object-center" src="{{$image_field['sizes']['large']}}" alt="who_am_i_image">
      @endfield

  </div>
</div>