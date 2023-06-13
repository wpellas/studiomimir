<!-- /galleri -->
@php($id = get_page_by_title( 'galleri', '', 'page' )->ID)
@extends('layouts.app')
@section('content')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url($id, 'hero')])
<section>
    @content
</section>
@endsection