<div class="w-full h-full relative my-4 lg:my-8 ">
  <h1 class=" text-center w-full text-4xl uppercase font-primary text-primary py-6">{{$title_field}}</h1>
  @if(!is_admin())
    <div>[instagram-feed feed=1]</div>
  @else
  
  @endif
</div>