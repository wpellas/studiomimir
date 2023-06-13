<div class="px-4 lg:px-0 w-full h-full relative flex flex-wrap justify-center {{ $block->classes }} {{is_admin() ? "pointer-events-none" : ""}}">
  <div class="w-lg lg:w-full lg:px-36 h-full z-10">
      <ul class="w-full h-full min-h-[512px] flex-wrap flex lg:flex-nowrap justify-center items-center gap-4 lg:gap-8">

          @if(!empty($portfolio_cards_field[0]))
          
            @foreach($portfolio_cards_field as $portfolio_card)
              @php($terms = get_the_terms($portfolio_card->ID, 'portfolio_category'))
              @if(!empty($terms))
              @php($terms = $terms[0])
              <li class="max-h-max lg:max-h-[350px] lg:min-h-[280px] xl:max-h-[448px] max-w-full bg-secondary list-none aspect-[88/107] contains-img">
                <div class="h-full w-full flex flex-wrap justify-center">
                  <a class="h-full w-full pl-4 pt-4 pr-4 text-2xl lg:text-3xl text-center font-primary text-primary hover:text-black transition-colors duration-200 flex flex-wrap" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug"}}">
                    <img width="600" height="600" class="object-cover object-center aspect-square transition-opacity duration-200" src="{{get_the_post_thumbnail_url($portfolio_card->ID, 'portrait')}}" loading="eager" alt="portfolio_{{get_the_title()}}">
                    
                    <div class="flex-1 w-full flex justify-center items-center pb-4">
                      <p class="max-w-full text-2xl lg:text-xl 2xl:text-2xl mt-4 font-secondary overflow-visible text-clip break-normal whitespace-nowrap">{!!mb_strtoupper($terms->name)!!}</p>
                    </div>
                  </a>
                </div>
              </li>
              @endif
            @endforeach

          @else

          <div>
            <p class="w-full text-center text-2xl text-secondary">{{__("Add some content in the WordPress Menu!", 'mimir')}}</p>
            @if(is_admin())
              <p class="w-full text-center text-xl text-secondary">{{__("Click this block and then add items in 'Portfolio Image'.", 'mimir')}}</p>
            @endif
          </div>

          @endif

      </ul>
    </div>
  <div class="absolute h-[200px] xl:h-[275px] 2xl:h-[350px] w-full bg-primary top-[calc(50%-50px)] xl:top-[calc(50%-90px)] hidden lg:block"></div>
</div>