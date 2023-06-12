<div class="banner slider">
  <div id="carouselExampleIndicators" class="carousel carousel-width-sm slide" data-bs-ride="true">
    <div class="carousel-indicators">
      @foreach($slideshow['view'] as $key => $slide)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="@if($key == 0) active @endif" aria-current="true" aria-label="Slide {{$key+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach($slideshow['view'] as $key => $slide)
      <div class="carousel-item @if($key == 0) active @endif">
        <img src="{{ url('/') }}/public/storage/slideshow/{{ $slide->slide_image }}" class="d-block w-100 banerw"  alt="...">
        <div class="carousel-caption deu-slidepad text-left w-100">
          <div class="col-12">
            <h1 class="deu-slidehead text-start pb-4" aos="zoom-in">Kanlife Group </h1>
            <div class="d-flex flex-row flex-wrap gap-3 gap-md-5 ms-3 wishicons">
              <div class="d-flex" aos="fade-down">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s1.png') }}">
                <p class="deu-health">Health</p>
              </div>
              <div class="d-flex" aos="fade-down"  aos-delay="400">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s2.png') }}">
                <p class="deu-health">Medical</p>
              </div>
              <div class="d-flex" aos="fade-down"  aos-delay="800">
                <img class="img-fluid deu-healthimg" src="{{ asset('public/image/s3.png') }}">
                <p class="deu-health">Wellness</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>