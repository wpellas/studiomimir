<!-- /portfolio_image -->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(2)])
<section class="min-h-[100vh]">
    @dump(the_title())
    @dump(get_permalink())
    d
</section>