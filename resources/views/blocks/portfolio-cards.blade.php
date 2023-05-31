<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
  <div class="w-lg lg:w-full lg:px-36 h-full z-10">
      <ul class="w-full h-full min-h-[512px] flex-wrap flex lg:flex-nowrap justify-center items-center gap-4 lg:gap-8">
          @if($portfolio_cards_field)
            @foreach($portfolio_cards_field as $portfolio_card)
              @php($terms = get_the_terms($portfolio_card->ID, 'portfolio_category')[0])
              <li class="max-h-[320px] lg:max-h-[350px] lg:min-h-[280px] xl:max-h-[448px] max-w-full bg-secondary list-none aspect-[88/107]">
                <div class="h-full w-full flex flex-wrap justify-center">
                  <a class="h-full w-full pl-4 pt-4 pr-4 text-2xl lg:text-3xl text-center font-primary text-primary hover:text-black flex flex-wrap" href="{{!is_admin() ? get_home_url() . "/$terms->taxonomy/$terms->slug" : ""}}">
                    <img class="object-cover object-center aspect-square" src="{{get_the_post_thumbnail_url($portfolio_card->ID)}}" alt="">
                    {{-- <div class="flex-1 h-[236px] lg:h-[258px] xl:h-[330.7px] w-full aspect-square bg-cover bg-center" style="background-image: url({{get_the_post_thumbnail_url($title->ID)}})"></div> --}}
                    
                    <div class="flex-1 w-full flex items-center pb-4">
                      <p class="w-full text-3xl xl:text-4xl mt-4 font-primary">{{esc_html(mb_strtoupper($terms->name))}}</p>
                    </div>
                  </a>
                </div>
              </li>
            @endforeach  
          @else
          <div>
            <p class="w-full text-center text-2xl text-secondary">Add some content in the WordPress Menu!</p>
            @if(is_admin())
              <p class="w-full text-center text-xl text-secondary">Click this block and then add items in 'Portfolio Cards Field'.</p>
            @endif
          </div>
          @endif
      </ul>
    </div>
  <div class="absolute h-[200px] xl:h-[350px] w-full bg-primary top-[calc(50%-50px)] xl:top-[calc(50%-90px)] hidden lg:block"></div>
</div>