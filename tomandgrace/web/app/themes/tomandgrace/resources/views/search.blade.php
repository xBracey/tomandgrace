@extends('layouts.app')

@php global $wp_query; @endphp

@section('content')
@include('partials.page-header')

<div class="search-main">
  <div class="search-main-container">

    @if (!have_posts())
    <h1> Sorry no results were found </h1>
    @else
    <h1> {{ $wp_query->post_count }} results have been found </h1>
    @endif


    @while(have_posts()) @php the_post() @endphp
    @include('partials.home-blog')
    @endwhile
  </div>
</div>

{!! get_the_posts_navigation() !!}
@endsection