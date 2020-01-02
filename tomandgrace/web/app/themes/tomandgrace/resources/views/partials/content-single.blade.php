<article>
    <div class="blog-header-container">
        <div class="blog-header">
            <div class="info">
                <h1>{{ get_the_title() }}</h1>
                <h2>By {{ get_field('tom_or_grace') == "Tom" ? "Tom Brace" : "Grace Marsey" }}</h2>
            </div>
        </div>
        <img src="{{get_the_post_thumbnail_url(null, 'large')}}" alt="Post Header Image" />
        <div class="light-background"></div>
    </div>

    <div class="content">
        {{ the_content() }}
    </div>
</article>