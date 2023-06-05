<!-- /galleri -->
@php($id = get_page_by_title( 'galleri', '', 'page' )->ID)
@extends('layouts.app')
@section('content')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url($id)])

<section class="min-h-[100vh] flex justify-center">
    
<div class="w-full h-full p-2 lg:p-0 font-primary text-primary text-center flex flex-wrap justify-center">
    @content
</div>
</section>
@endsection