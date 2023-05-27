<div class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block->classes }}">
  <div class="w-lg lg:w-full lg:px-36 h-full z-10">
      <ul class="w-full h-full flex-wrap xl:flex-nowrap flex justify-center items-center gap-4 lg:gap-8">
          @if($portfolio_cards_field)
            @foreach($portfolio_cards_field as $portfolio_card)
              @php($title = $portfolio_card['title_field'][0])
              @php($terms = get_the_terms($title->ID, 'portfolio_category')[0])
              <li class="h-[410px] max-w-[340px] w-full bg-secondary list-none">
                <div class="h-full w-full p-6 flex flex-wrap justify-center">
                    <a class="h-8 w-full p-2 text-2xl lg:text-3xl text-center font-primary text-primary hover:text-primary" href="{{!is_admin() ? get_home_url() . "/$terms->taxonomy/$terms->slug" : ""}}">
                    <div class="w-full h-80 bg-cover bg-center mb-2" style="background-image: url({{get_the_post_thumbnail_url($title->ID)}})"></div>
                      {{esc_html(mb_strtoupper($terms->name))}}
                    </a>
                </div>
              </li>
            @endforeach                  
          @endif
      </ul>
  </div>
  <div class="absolute h-[400px] w-full bg-primary bgCalc"></div>
</div>