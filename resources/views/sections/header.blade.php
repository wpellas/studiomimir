@if (has_nav_menu('primary_navigation'))
{{-- Large Format --}}
  @if(function_exists('is_woocommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_account_page()))
  <header class="relative bg-primary w-full h-[100px] top-0 justify-center z-20 hidden lg:flex font-primary uppercase">
    <nav class="nav-wc nav-primary relative hidden lg:flex flex-nowrap text-secondary w-lg" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
  @elseif(is_front_page())
  <header class="absolute w-full h-[100px] top-0 justify-center z-20 hidden lg:flex font-primary uppercase">
    <nav class="nav-fp nav-primary relative hidden lg:flex flex-nowrap text-secondary w-lg border-b-[1px] border-secondary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
  @else
  <header class="absolute w-full h-[100px] top-0 justify-center z-20 hidden lg:flex font-primary uppercase bg-secondary">
    <nav class="nav-any nav-primary relative hidden lg:flex flex-nowrap text-primary w-lg" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
  
  @endif
  <a class="z-30 min-w-max hover:scale-105 transition-all duration-200" href="{{home_url()}}"><img class="p-2 h-[100px] w-[100px] aspect-square" src="{{get_site_icon_url('small')}}" alt="{{__('studio mimir logo', 'mimir')}}" aria-label="{{bloginfo('name')}}{{__('s Logotyp', 'mimir')}}"></a>
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'large-menu', 'echo' => false]) !!}
    </nav>
  </header>
@endif

@if (has_nav_menu('primary_navigation'))
{{-- Small Format --}}
  <header class="block lg:hidden z-20 fixed w-full top-0 pointer-events-none overflow-visible min-h-[100dvh]">
    <div class="w-full absolute top-0 h-20 bg-secondary flex flex-nowrap justify-between items-center px-4 drop-shadow-lg pointer-events-auto">
      <a class="text-black h-full w-auto" href="{{home_url()}}"><img class="relative max-h-20 w-auto" src="{{get_site_icon_url('small')}}" alt="{{__('studio mimir logo', 'mimir')}}" aria-label="{{bloginfo('name')}}{{__('s Logotyp', 'mimir')}}"></a>
      <i id="openSmallMenu" class="fa-solid fa-bars relative text-black cursor-pointer text-4xl select-none" aria-label="{{__('Öppna Mobilmeny', 'mimir')}}"></i>
    </div>
    <nav id="smallMenu" class="nav-small absolute top-0 left-0 flex justify-end min-h-[100dvh] min-w-full overflow-scroll invisible opacity-0 pointer-events-auto translate-x-full transition-all duration-200" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="text-primary bg-secondary min-h-[100dvh] w-full sm:w-[80%] p-16 sm:p-8 text-3xl font-primary uppercase">
        <a class="absolute left-4 top-4 z-30 text-black h-full w-auto" href="{{home_url()}}"><img class="relative max-h-10 w-auto" src="{{get_site_icon_url('small')}}" alt="{{__('studio mimir logo', 'mimir')}}" aria-label="{{bloginfo('name')}}{{__('s Logotyp', 'mimir')}}"></a>
        <i id="closeSmallMenu" class="fa-solid fa-xmark absolute right-4 top-4 z-30 text-4xl text-secondary select-none bg-primary py-2 px-3 cursor-pointer" aria-label="{{__('Stäng Mobilmeny', 'mimir')}}"></i>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-menu', 'echo' => false]) !!}
      </div>
    </nav>
  </header>
@endif