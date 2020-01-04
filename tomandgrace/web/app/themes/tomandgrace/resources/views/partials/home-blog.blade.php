<a class="home-blog" href="{{ get_permalink() }}">
    @if (empty(get_the_post_thumbnail_url(null, 'medium')))
    <div class="image logo" style="background-image: url('@asset('images/logo.png')')"></div>
    @else
    <div class="image" style="background-image: url('{{ get_the_post_thumbnail_url(null, 'medium') }}')"></div>
    @endif
    <h2 class="entry-title">{!! get_the_title() !!}</h2>
</a>