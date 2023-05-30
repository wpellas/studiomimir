@if (has_nav_menu('primary_navigation'))
<header class="banner hidden lg:flex">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

  {{-- Large Format --}}
    <nav class="nav-primary hidden lg:block text-secondary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  </header>
  @endif

@if (has_nav_menu('primary_navigation'))
<header class="block lg:hidden z-10 fixed w-[100vw] top-0">
    <span id="openSmallMenu" class="material-symbols-outlined absolute top-4 right-4 text-black cursor-pointer text-4xl select-none">menu</span>
    {{-- Small Format --}}
    <nav id="smallMenu" class="nav-small relative top-0 left-0 hidden flex justify-end h-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="text-primary bg-secondary h-full w-[80%] p-8 text-4xl">
        <span id="closeSmallMenu" class="absolute right-4 top-4 z-30 text-4xl text-primary material-symbols-outlined select-none">close</span>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </div>
    </nav>
  </header>
@endif