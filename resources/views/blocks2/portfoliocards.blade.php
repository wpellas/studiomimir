{{--
  Title: Portfolio Cards
  Description: Multiple Portfolio Category Cards to provide easy links.
  Category: formatting
  Icon: format-gallery
  Keywords: portfolio cards category link
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="w-full h-full relative flex flex-wrap justify-center my-4 lg:my-8 {{ $block['classes'] }}">
    <div class="w-[1024px] lg:w-full lg:px-36 h-full z-10">
        <ul class="w-full h-full flex justify-center items-center gap-4 lg:gap-8">
            @fields('portfolio_cards')
            @php($title = get_sub_field('title')[0])
            @php($terms = get_the_terms($title->ID, 'portfolio_category')[0])
                <li class="h-[410px] max-w-[340px] w-full bg-primary bgCalc1 list-none">
                    <div class="h-full w-full p-6 flex flex-wrap justify-center">
                        <a class="h-8 w-full p-2 text-3xl text-center font-primary text-secondary" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug"}}">
                        <div class="w-full h-80 bg-cover bg-center mb-2" style="background-image: url({{get_the_post_thumbnail_url($title->ID)}})"></div>
                            {{esc_html(mb_strtoupper($terms->name))}}
                        </a>
                    </div>
                </li>
            @endfields
        </ul>
    </div>
    <div class="absolute h-[400px] w-full bg-secondary bgCalc"></div>
</div>