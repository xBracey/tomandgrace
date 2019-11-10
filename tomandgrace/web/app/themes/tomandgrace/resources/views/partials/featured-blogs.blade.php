<div class="featured-blogs">
  <div>
    <h2> Tom’s Latest Blog </h2>
    @while ($tom_query->have_posts()) @php($tom_query->the_post())
      @include('partials.home-blog')
    @endwhile
  </div>
  <div>
    <h2> Grace's Latest Blog </h2>
    @while ($grace_query->have_posts()) @php($grace_query->the_post())
      @include('partials.home-blog')
    @endwhile
  </div>
</div>
