<!-- Our Blog -->
<section class="deu-ourblg">
  <div class="container">
    <h3 class="text-center mt-5 mb-5 deu-bloghead">Our Blogs</h3>
    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide mb-5" data-ride="carousel" data-interval="0">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                @foreach($blogPost['latest'] as $key => $post)
                @if($key < 3)
                <div class="col-sm-4">
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
                      <a href="#">{{ $post->post_title }}</a>
                    </h3>
                    <p class="post-description">
                    {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                    </p>
                    <a href="{{-- URL::to('/single') --}}/{{-- $post->post_slug --}}" title="{{ $post->post_title }}">
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
                <div class="col-sm-4">
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
                      <a href="#">{{ $post->post_title }}</a>
                    </h3>
                    <p class="post-description">
                    {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                    </p>
                    <a href="{{-- URL::to('/single') --}}/{{-- $post->post_slug --}}" title="{{ $post->post_title }}">
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
                <div class="col-sm-4">
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
                      <a href="#">{{ $post->post_title }}</a>
                    </h3>
                    <p class="post-description">
                    {{ mb_substr($post->post_short_desc, 0, 110).'...' }}
                    </p>
                    <a href="{{-- URL::to('/single') --}}/{{-- $post->post_slug --}}" title="{{ $post->post_title }}">
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
          <!-- Carousel controls -->
          <a class="carousel-control-prev deus-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
          </a>
          <a class="carousel-control-next deus-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
