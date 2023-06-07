@if(is_admin())
  <p class="text-primary text-center">Add custom images in the toolbar to change these, or leave empty to allow five random portfolio images that changes every page reload to exist here instead.</p>
  @endif
<div class="w-full h-96 relative hidden lg:flex justify-between gap-2 py-4 lg:py-8 {{is_admin() ? "pointer-events-none" : ""}}">
  @if(!empty($divider_field))

    @foreach ($divider_field as $image)
      @php($terms = get_the_terms($image->ID, 'portfolio_category'))
      @if(!empty($terms))
      @php($terms = $terms[0])
      <a class="flex-1 h-96 w-full contains-img" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug#jump-$image->ID"}}"><img width="100%" height="100%" class="w-full h-full object-center object-cover transition-opacity duration-200" src="{{get_the_post_thumbnail_url($image->ID, 'large')}}" alt="divider-image_{{get_the_title()}}"></a>
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
        <a class="flex-1 h-96 w-full contains-img" href="{{get_home_url() . "/$terms->taxonomy/$terms->slug#jump-" . get_the_ID()}}"><img width="100%" height="100%" class="w-full h-full object-center object-cover transition-opacity duration-200" src="{{get_the_post_thumbnail_url(get_the_ID(), 'large')}}" alt="divider-image_{{get_the_title()}}"></a>
        @endif
      @endposts
    @endhasposts

  @endif
</div>