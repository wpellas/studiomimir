{{-- Default Page --}}
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])
@section('content')
<section>
    @posts
        @content
    @endposts
</section>
@endsection
