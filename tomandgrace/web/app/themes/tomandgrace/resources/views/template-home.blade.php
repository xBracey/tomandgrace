{{--
  Template Name: Home Page
--}}

@extends('layouts.app')


@section('content')
  @include('partials.featured-blogs')

  @include('partials.about-us')

  {!! get_the_posts_navigation() !!}
@endsection
