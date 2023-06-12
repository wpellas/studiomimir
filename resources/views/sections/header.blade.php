@if (has_nav_menu('primary_navigation'))
{{-- Large Format --}}
  <header class="w-full h-[100px] absolute top-0 justify-center z-20 hidden lg:flex font-secondary uppercase">
    <nav class="nav-primary hidden lg:block text-secondary border-b-[1px] border-secondary w-lg  " aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'large-menu', 'echo' => false]) !!}
    </nav>
  </header>
@endif

@if (has_nav_menu('primary_navigation'))
{{-- Small Format --}}
  <header class="block lg:hidden z-20 fixed w-full top-0 pointer-events-none">
    <div class="w-full absolute top-0 h-20 bg-secondary flex flex-nowrap justify-between items-center px-4 drop-shadow-lg pointer-events-auto">
      <a class="w-full text-black mr-8" href="{{home_url()}}"><img class="relative" src="" alt="studio mimir"></a>
      <i id="openSmallMenu" class="fa-solid fa-bars relative text-black cursor-pointer text-4xl select-none"></i>
    </div>
    <nav id="smallMenu" class="nav-small relative top-0 left-0 flex justify-end h-[100vh] invisible opacity-0 pointer-events-auto translate-x-full transition-all duration-200" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="text-primary bg-secondary h-full w-full sm:w-[80%] p-16 sm:p-8 text-3xl font-secondary uppercase">
        <i id="closeSmallMenu" class="fa-solid fa-xmark absolute right-4 top-4 z-30 text-4xl text-secondary select-none bg-primary py-2 px-3 cursor-pointer"></i>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-menu', 'echo' => false]) !!}
      </div>
    </nav>
  </header>
@endif
