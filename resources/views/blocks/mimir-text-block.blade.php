<div class="px-4 lg:px-0 mimir w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="h-full {{is_admin() ? "w-lg" : "w-full lg:w-lg"}}">
    {!! strip_tags($text_block_field, '<div>, <a>, <p>, <strong>, <em>, <h1>, <h2>, <h3>, <h4>, <h5>, <h6>, <ul>, <ol>, <li>') !!}
  </div>
</div>