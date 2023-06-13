<footer class="content-info flex flex-wrap justify-center items-center font-primary mb-8 mt-16">
  <div class="w-full lg:w-lg mx-4 lg:mx-0 h-[100px] border-t-[1px] border-black pt-4">

    {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
    @if (has_nav_menu('secondary_navigation'))
    <nav class="nav-secondary uppercase w-full flex justify-center font-secondary text-lg" aria-label="{{ wp_get_nav_menu_name('secondary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif

    @if(!empty(get_field('footer_social_media_buttons', 'some-options')))
      <ul class="w-full flex justify-center py-4">
        @if(!empty(get_field('footer_instagram_field', 'some-options')))
        <li>
          <a class="relative" href="https://www.instagram.com/{{get_field('footer_instagram_field', 'some-options')}}">
            <i class="fa-brands fa-instagram text-4xl text-black hover:text-primary hover:scale-105 transition-all duration-200"></i>
          </a>
        </li>
        @endif
      </ul>
    @else
    <span class="w-full py-4"></span>
    @endif
    <p class="w-full text-sm lg:text-base text-center mb-6 uppercase">{{__("All content copyright", 'mimir')}} &#169; {{date('Y')}} Studio Mimir</p>
  </div>
</footer>
