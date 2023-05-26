@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <section class="section min-h-[100vh]">
    
  @content
  
  {{-- @component('components.button', ['text' => 'Hello!'])
  @slot('title')
  Wowsie!
  @endslot
  This is a button
  @endcomponent --}}
  
  {{-- @if (! have_posts())
  <x-alert type="warning">
    {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
    
    {!! get_search_form(false) !!}
    @endif
    
    @php
    $portfolioQuery = new WP_Query([
      'post_type' => 'portfolio_image',
      'posts_per_page' => -1,
      'orderby' => 'rand'
    ]);
    $pedigreeQuery = new WP_Query([
      'post_type' => 'dog_pedigree',
      'posts_per_page' => -1,
      'orderby' => 'rand'
    ]);
    @endphp

@while($pedigreeQuery->have_posts()) @php($pedigreeQuery->the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
@endwhile --}}

{{-- @include('components.image-card') --}}

{{-- {!! get_the_posts_navigation() !!} --}}
</section>
@endsection

{{-- @section('sidebar')
@include('sections.sidebar')
@endsection --}}
