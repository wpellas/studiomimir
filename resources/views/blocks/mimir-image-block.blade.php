<div class="px-4 lg:px-0 mimir w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  @hasfield('image_field')
    <img width="100%" height="100%" class="w-full lg:w-lg h-auto aspect-auto object-cover object-center" src="{{$image_field['sizes']['large']}}" alt="{{get_the_title()}}_image">
  @else
  <h1 class="text-center">{{__('Välj en bild i verktygsfältet', 'mimir')}}.</h1>
  @endfield
</div>