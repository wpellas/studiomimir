@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url()])
<section class="min-h-[100vh] flex justify-center">
    <div class="w-full lg:w-lg h-full px-4 lg:px-0 font-primary text-black">
        @content
    </div>
</section>