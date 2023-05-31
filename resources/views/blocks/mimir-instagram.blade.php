<div class="w-full h-full relative my-4 lg:my-8 hidden lg:block">
  <h1 class="text-center w-full text-xl lg:text-4xl uppercase font-secondary text-primary py-6">{{$title_field}}</h1>
  @if(!is_admin())
    <div>[instagram-feed feed={{get_field('choice_field') ? get_field('choice_field') : '1'}}]</div>
  @else
    <p class="w-full text-xl text-primary text-center">{{__('This is where the instagram feed is shown. Your currently selected feed is: ')}}{{get_field('choice_field') ? get_field('choice_field') : '1'}}</p>
  @endif
</div>