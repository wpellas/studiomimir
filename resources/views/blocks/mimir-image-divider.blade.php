<div class="w-full h-96 relative hidden lg:flex justify-between gap-2 py-4 lg:py-8 {{is_admin() ? "pointer-events-none" : ""}}">
  @if(!empty($divider_field))

    @foreach ($divider_field as $image)
      @php($terms = get_the_terms($image->ID, 'portfolio_category'))
      @if(!empty($terms))
        @php($terms = $terms[0])
      <a class="flex-1 h-96 w-full contains-img" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug"}}"><img class="w-full h-full object-center object-cover transition-opacity duration-200" src="{{get_the_post_thumbnail_url($image->ID, 'large')}}" alt="divider-image"></a>
      @endif
    @endforeach

  @else

    @query([
      'post_type' => 'portfolio_image',
      'posts_per_page' => 5,
      'orderby' => 'rand'
    ])

    @hasposts
      @posts
        @php($terms = get_the_terms(get_the_ID(), 'portfolio_category'))
        @if(!empty($terms))
          @php($terms = $terms[0])
        <a class="flex-1 h-96 w-full contains-img" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug"}}"><img class="w-full h-full object-center object-cover transition-opacity duration-200" src="{{get_the_post_thumbnail_url(get_the_ID(), 'large')}}" alt="divider-image"></a>
        @endif
      @endposts
    @endhasposts

  @endif
</div>