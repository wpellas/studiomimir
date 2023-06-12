<!-- /portfolio_image -->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(2, 'hero')])
<section>
    @dump(the_title())
    @dump(get_permalink())
    /portfolio_image
</section>