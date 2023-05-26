{{--
  Title: Image Divider (Portfolio Category)
  Description: Image Divider with random posts spanning from a category of your choice.
  Category: formatting
  Icon: images-alt2
  Keywords: image divider
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}
@php($category = get_field('category'))
@if($category)
@query([
    'post_type' => 'portfolio_image',
    'posts_per_page' => 5,
    'orderby' => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'portfolio_category',
            'terms' => $category,
            'field' => 'term_id'
        ]
    ]
])
@else
@query([
    'post_type' => 'portfolio_image',
    'posts_per_page' => 5,
    'orderby' => 'rand'
])

<div class="w-full h-96 relative hidden lg:flex justify-between gap-2 lg:gap-4 py-4 lg:py-8">
    @posts
    <img class="h-full w-auto object-scale-down" src="{{get_the_post_thumbnail_url()}}" alt="">
    @endposts
</div>
@endif

