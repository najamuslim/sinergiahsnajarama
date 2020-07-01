@extends('layout.app')
<head>
<<<<<<< HEAD
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Home - Sinergia Homeschooling</title>
=======
<title>Home - Sinergia Homeschooling</title>
<style>
.carousel-fade .carousel-item {
 opacity: 0;
 transition-duration: .6s;
 transition-property: opacity;
}

.carousel-fade  .carousel-item.active,
.carousel-fade  .carousel-item-next.carousel-item-left,
.carousel-fade  .carousel-item-prev.carousel-item-right {
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-right {
 opacity: 0;
}

.carousel-fade  .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade  .active.carousel-item-prev {
 transform: translateX(0);
 transform: translate3d(0, 0, 0);
}
</style>
>>>>>>> master
</head>

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}"/>
@stop

@section('content')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/s2.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/s3.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/s4.png')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/s5.png')}}" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/s6.png')}}" alt="fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="jumbotron" style="background: center; text-align: center;">
<p style="text-align: left;">I am delighted that you have chosen to consider Sinergia as an education destination.&nbsp;This site will provide you with the information about Sinergia Worldwide Education programmes and services more flexible.&nbsp;Our education programmes and services aim to instill discipline, professional conduct, and an ethical attitude in the education environments.&nbsp;This balanced approach to study develops the student as a whole, both personally and professionally preparing them for life.&nbsp;I wish you luck with that choice in the full knowledge that you will not regret your decision to join in Sinergia Worldwide Education.</p>
  <hr>
  <p style="text-align: right;"><em><strong>Principal of Sinergia</strong></em></p>
</div>

<div class="container" style="text-align: center;">
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-02.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-03.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-04.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-05.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-06.jpg') }}" alt="poster sinergia regsitration">
    </a>
    <a href="https://bit.ly/sinergia_registration" style="margin: 5px; margin-bottom: 5px; margin-top: 10px;">        
        <img style="height: 35%; width: 25%;" src="{{ asset('images/postersinergia/poster sinergia kotak-07.jpg') }}" alt="poster sinergia regsitration">
    </a>
</div>

<<<<<<< HEAD
=======
<script>
    $('.carousel').carousel({
        interval: 5000,
        pause: 'false'
    })
</script>
>>>>>>> master
@endsection
