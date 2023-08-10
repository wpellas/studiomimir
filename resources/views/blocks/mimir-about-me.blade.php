<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }}">
  <div class="w-full lg:w-lg h-full z-10 flex flex-wrap lg:flex-nowrap gap-8 font-primary">
      <div class="w-full text-center flex justify-center items-stretch gap-4 text-lg mimir-about-me" useBlockProps>

        <InnerBlocks 
          template="<?php echo esc_attr( wp_json_encode([['acf/mimir-about-me-text'], ['core/image']])); ?>" 
          allowedBlocks="<?php echo esc_attr(wp_json_encode([])); ?>" 
          templateLock="<?php echo esc_attr(wp_json_encode(['contentOnly'])); ?>"
        />

      </div>

      {{-- @hasfield('image_field') --}}
        {{-- <img width="100%" height="100%" class="h-auto w-full lg:w-1/2 object-cover object-center" src="" alt="who_am_i_image"> --}}
      {{-- @endfield --}}

  </div>
</div>
