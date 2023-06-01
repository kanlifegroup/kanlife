<!-- Our Blog -->

<section class="deu-ourblg pt-5">
  <div class="container-fluid">
    <h3 class="text-center mt-0 mt-md-5 mb-5 deu-bloghead">Our Blogs</h3>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner" aos="fade-left">
        <div class="carousel-item active">
          <div class="row owl-carousel" id="owl-blog">
            @foreach($blogPost['latest'] as $key => $post)
              @if($key < 3)
              <div class="owl-item" >
                <div class="post-slide10">
                  @if($post->post_media_type =='image')
                  <div class="">
                  @if($post->post_image!='')
                  <img class="pic-1 h-100" src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" alt="{{ $post->post_title }}">
                  @else
                  <img class="pic-1 h-100" src="{{ url('/') }}/public/img/no-image.png" alt="{{ $post->post_title }}">
                  @endif
                  </div>
                  @else
                  @php 
                  $link = $post->post_video;
                  $video_id = explode("?v=", $link);
                  $video_id = $video_id[1];
                  @endphp
                  <img class="pic-1" src="https://img.youtube.com/vi/{{ $video_id }}/mqdefault.jpg" alt="{{ $post->post_title }}">
                  @endif
                  <p class="deu-dec text-sm">{{ date('d M Y', strtotime($post->post_date)) }}</p>
                  <h3 class="post-title">
                    <a href="{{ route('about.detail.blog', $post->post_id) }}">{{ $post->post_title }}</a>
                  </h3>
                  <p class="post-description">
                  {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                  </p>
                  <a href="{{ route('about.detail.blog', $post->post_id) }}" title="{{ $post->post_title }}">
                    <button class="read-more">read more</button>
                  </a>
                </div>
              </div>
              @endif
            @endforeach
          </div>
        </div>
        @if(count($blogPost['latest']) > 3)
        <div class="carousel-item">
          <div class="row">
            @foreach($blogPost['latest'] as $key => $post)
              @if($key > 2 && $key < 6)
              <div class="owl-item">
                <div class="post-slide10">
                  @if($post->post_media_type =='image')
                  @if($post->post_image!='')
                  <img class="pic-1" src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" alt="{{ $post->post_title }}">
                  @else
                  <img class="pic-1" src="{{ url('/') }}/public/img/no-image.png" alt="{{ $post->post_title }}">
                  @endif
                  @else
                  @php 
                  $link = $post->post_video;
                  $video_id = explode("?v=", $link);
                  $video_id = $video_id[1];
                  @endphp
                  <img class="pic-1" src="https://img.youtube.com/vi/{{ $video_id }}/mqdefault.jpg" alt="{{ $post->post_title }}">
                  @endif
                  <p class="deu-dec">{{ date('M Y', strtotime($post->post_date)) }}</p>
                  <h3 class="post-title">
                    <a href="{{ route('about.detail.blog', $post->post_id) }}">{{ $post->post_title }}</a>
                  </h3>
                  <p class="post-description">
                  {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                  </p>
                  <a href="{{ route('about.detail.blog', $post->post_id) }}" title="{{ $post->post_title }}">
                    <button class="read-more">read more</button>
                  </a>
                </div>
              </div>
              @endif
            @endforeach
          </div>
        </div>
        @endif
        @if(count($blogPost['latest']) > 6)
        <div class="carousel-item">
          <div class="row">
            @foreach($blogPost['latest'] as $key => $post)
              @if($key > 5 && $key < 9)
              <div class="owl-item">
                <div class="post-slide10">
                  @if($post->post_media_type =='image')
                  @if($post->post_image!='')
                  <img class="pic-1" src="{{ url('/') }}/public/storage/post/{{ $post->post_image }}" alt="{{ $post->post_title }}">
                  @else
                  <img class="pic-1" src="{{ url('/') }}/public/img/no-image.png" alt="{{ $post->post_title }}">
                  @endif
                  @else
                  @php 
                  $link = $post->post_video;
                  $video_id = explode("?v=", $link);
                  $video_id = $video_id[1];
                  @endphp
                  <img class="pic-1" src="https://img.youtube.com/vi/{{ $video_id }}/mqdefault.jpg" alt="{{ $post->post_title }}">
                  @endif
                  <p class="deu-dec">{{ date('M Y', strtotime($post->post_date)) }}</p>
                  <h3 class="post-title">
                    <a href="{{ route('about.detail.blog', $post->post_id) }}">{{ $post->post_title }}</a>
                  </h3>
                  <p class="post-description">
                  {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                  </p>
                  <a href="{{ route('about.detail.blog', $post->post_id) }}" title="{{ $post->post_title }}">
                    <button class="read-more">read more</button>
                  </a>
                </div>
              </div>
              @endif
            @endforeach
          </div>
        </div>
        @endif
      </div>
      <!-- <div class="d-flex justify-content-center gap-3 mb-3">
          <button class="btn border-0" type="button">
            <img src="{{ asset('public/image/carousal-left.svg') }}" alt="" class="img-fluid d-block w-75">
          </button>
          <button class="btn border-0" type="button">
            <img src="{{ asset('public/image/carousal-right.svg') }}" alt="" class="img-fluid d-block w-75">
          </button>
      </div> -->
    </div>
  </div>
</section>
