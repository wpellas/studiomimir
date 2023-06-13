<div class="w-full h-full relative hidden lg:block {{is_admin() ? "pointer-events-none" : ""}}">
  <h1 class="text-center w-full text-xl lg:text-4xl uppercase font-secondary text-primary py-4">{{$title_field}}</h1>

  @if(is_admin())
    <h5 class="w-full text-primary text-center font-primary normal-case">{{__('Currently using feed', 'mimir')}} <span class="text-black">#{{get_field('choice_field') ? get_field('choice_field') : '1'}}</span>. This is where the Instagram feed is shown for a page visitor.</h5>
  @else
    <div>[instagram-feed feed={{get_field('choice_field') ? get_field('choice_field') : '1'}}]</div>
  @endif
  
</div>