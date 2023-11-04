@extends('layouts.main')

@push('title')
    <title>Home</title>
@endpush


@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
@endpush

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}">
@endpush


@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mainswiper.css') }}">
@endpush


@section('main-section')
<section class="main swiper mySwiper">
    <div class="wrapper swiper-wrapper">
      <div class="slide swiper-slide">
        <img src="{{ asset('images/img1.jpg') }}" alt="" class="image" />
        <div class="image-data">
          <span class="text">Enjoy the finest coffee drinks.</span>
          <h2>
            Enjoy Our Exclusive <br />
            Coffee and Cocktails
          </h2>
          <a href="#" class="button">About Us</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="{{ asset('images/img2.jpg') }}" alt="" class="image" />
        <div class="image-data">
          <span class="text">We really like what we do.</span>
          <h2>
            Coffee Beans with a <br />
            Perfect Aroma
          </h2>
          <a href="#" class="button">About Us</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="{{ asset('images/img3.jpg') }}" alt="" class="image" />
        <div class="image-data">
          <span class="text">Making Our coffee with lover.</span>
          <h2>
            Alluring and Fragrant <br />
            Coffee Aroma
          </h2>
          <a href="#" class="button">About Us</a>
        </div>
      </div>
    </div>

    <div class="swiper-button-next nav-btn"></div>
    <div class="swiper-button-prev nav-btn"></div>
    <div class="swiper-pagination"></div>
  </section>


  <div class="container categories">

        <h1>Categories</h1>

        <div class="swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                 
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                 
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                 
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                 
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                 
            </div>


          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>


        </div>
  </div>

  
  <div class="heightview">

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/cardswiper.js') }}"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

<script>
  var swiper = new Swiper('.categories .swiper', {
    slidesPerView: 3,
    direction: getDirection(),
    navigation: {
      nextEl: '.categories .swiper-button-next',
      prevEl: '.categories .swiper-button-prev',
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }
</script>


@endsection