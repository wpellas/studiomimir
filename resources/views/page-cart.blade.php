{{-- Cart --}}
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])
<section>
    <h1 class="w-full text-center">Work in progress.</h1>
    @posts
        {{-- @content --}}
    @endposts
</section>
