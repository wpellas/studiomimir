<div class="mimir w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="h-full flex flex-wrap lg:flex-nowrap items-center gap-4 {{$choice_field == 'Left' ? "flex-row-reverse" : "" }} {{is_admin() ? "w-lg" : "w-full"}}">
    <div class="w-full h-full">
      {!! strip_tags($text_block_field, '<div>, <a>, <p>, <strong>, <em>, <h1>, <h2>, <h3>, <h4>, <h5>, <h6>, <ul>, <ol>, <li>') !!}
    </div>
    <img width="100%" height="100%" class="w-full h-full" src="{{!empty($image_field) ? $image_field['sizes']['large'] : get_the_post_thumbnail_url(get_the_ID(), 'portrait')}}" alt="{{get_the_title()}}_image">
  </div>
</div>