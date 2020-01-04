{{--
  Template Name: Blogs Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.blogs-header')
@include('partials.blogs-main')
@endwhile
@endsection