<div class="px-4 lg:px-0 mimir w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-full lg:w-lg">
    @hasfield('video_field')
    <iframe class="aspect-video" width="100%" frameborder="0px" src="{{"https://www.youtube.com/embed/$video_field"}}"></iframe>
    @endfield
  </div>
</div>
