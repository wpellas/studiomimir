@if (has_nav_menu('primary_navigation'))
  <header class="banner hidden lg:flex font-secondary uppercase">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

  {{-- Large Format --}}
    <nav class="nav-primary hidden lg:block text-secondary border-b-[1px] border-secondary w-lg  " aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  </header>
@endif

@if (has_nav_menu('primary_navigation'))
  <header class="block lg:hidden z-20 fixed w-[100vw] top-0">
    <span id="openSmallMenu" class="material-symbols-outlined absolute top-4 right-4 text-black cursor-pointer text-4xl select-none bg-secondary p-2">menu</span>
    {{-- Small Format --}}
    <nav id="smallMenu" class="nav-small relative top-0 left-0 hidden flex justify-end h-[100vh]" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="text-primary bg-secondary h-full w-[80%] p-8 text-3xl font-secondary uppercase">
        <span id="closeSmallMenu" class="absolute right-4 top-4 z-30 text-4xl text-secondary material-symbols-outlined select-none bg-primary p-2 cursor-pointer">close</span>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-menu', 'echo' => false]) !!}
      </div>
    </nav>
  </header>
@endif
