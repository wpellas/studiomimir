<div class="w-full flex justify-center">
  <ul class="px-4 lg:px-0 relative w-lg grid grid-cols-3 grid-flow-row gap-4 lg:gap-2">
    @hasfield('portfolio_gallery_field')
      @foreach($portfolio_gallery_field as $gallery_image)
        <li class="relative h-full w-full aspect-square hidden lg:block select-none flex-grow flex-auto contains-img">
          <img width="100%" height="100%" class="h-full w-full aspect-square object-cover object-center transition-opacity duration-200" src="{{get_the_post_thumbnail_url($gallery_image->ID, 'portrait')}}" alt="{{get_the_title()}}">
        </li>     
      @endforeach
    @else
    <h1>{{__('Add some images in the list to the right!', 'mimir')}}</h1>
    @endfield
  </ul>
</div>