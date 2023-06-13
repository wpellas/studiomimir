{{-- Cart --}}
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])
@section('content')
<section>
    <h1 class="w-full text-center pt-8">{{__('Din kundvagn', 'mimir')}}</h1>
    @posts
        @content
    @endposts
</section>
@endsection
