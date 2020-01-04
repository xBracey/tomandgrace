<div class="blogs-main">
    <div class="blogs-main-container">
        @while ($query->have_posts()) @php($query->the_post())
        @include('partials.home-blog')
        @endwhile
    </div>
</div>