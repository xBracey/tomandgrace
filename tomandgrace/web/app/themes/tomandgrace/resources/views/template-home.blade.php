{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @while ($loop->have_posts()) @php($loop->the_post())
    @include('partials.home-blog')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
