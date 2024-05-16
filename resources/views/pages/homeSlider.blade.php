<link rel="stylesheet" href="{{ asset('css/simple-adaptive-slider.min.css') }}">
<script src="{{ asset('js/simple-adaptive-slider.min.js') }}"></script>

<div id="carouselExampleCaptions" class="carousel slide mx-60 mt-10">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/slider.png')}}" class="d-block w-full" style="height: 300px" alt="Слайд 1">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slider2.png')}}" class="d-block w-full" style="height: 300px" alt="Слайд 2">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <a href="/book-13">
      <div class="carousel-item">
        
          <img src="{{asset('img/slider4.png')}}" class="d-block w-full" style="height: 300px" alt="Слайд 3">
        
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      </a>
    </div>
    <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

