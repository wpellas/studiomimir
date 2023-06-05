<div class="w-full h-full flex flex-wrap justify-center pointer-events-none">
  <ul class="relative w-lg h-full flex flex-wrap">
    @if(!empty($portfolio_cards_field[0]))
      @foreach($portfolio_gallery_field as $gallery_image)
        <li class="w-1/3 h-auto list-none">
          <img class="h-full w-full" src="{{get_the_post_thumbnail_url($gallery_image->ID, 'large')}}" alt="">
        </li>     
      @endforeach
    @endif
  </ul>
</div>