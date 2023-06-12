@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'hero')])


@section('content')
<section>
  <div class="w-full lg:w-lg h-full">
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
  </div>
</section>
@endsection
