<footer class="content-info flex flex-wrap justify-center items-center font-primary my-8">
  <div class="w-full lg:w-[1024px] px-8 lg:px-0 h-[100px]">

    {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
    @if (has_nav_menu('secondary_navigation'))
    <nav class="nav-secondary uppercase w-full flex justify-center" aria-label="{{ wp_get_nav_menu_name('secondary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif
    <p class="w-full text-center my-8 uppercase">{{__("All content copyright")}} &#169; {{date('Y')}} Studio Mimir</p>
  </div>
</footer>
