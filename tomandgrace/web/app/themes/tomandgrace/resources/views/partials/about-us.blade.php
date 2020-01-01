<div class="about-us-outer-container">
  <div class="about-us-inner-container">
    <h2> {{ $about_us_header }} </h2>

    <div class="about-us-info">
      <img src="{{ wp_get_attachment_image_src($about_us_picture, 'medium')[0] }}" />
      <div class="information">
        {!! $about_us_information !!}
      </div>
    </div>
  </div>
</div>
