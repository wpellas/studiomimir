@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-page', 'partials.content'])
    
  @endwhile
@endsection
