@if(is_admin())
<div class="w-full h-full flex flex-wrap justify-center">
@endif
<ul class="relative w-lg h-full flex flex-wrap">
  @foreach($portfolio_gallery_field as $gallery_image)
        <li class="w-1/3 h-auto list-none">
            <img class="h-full w-full" src="{{get_the_post_thumbnail_url($gallery_image->ID)}}" alt="">
        </li>     
  @endforeach
</ul>
@if(is_admin())
</div>
@endif