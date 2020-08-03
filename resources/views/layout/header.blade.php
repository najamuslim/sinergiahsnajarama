<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<div class="top-header fixed-top text-white" style="height: 30px; font-size:15px; background-color: #dd8500;">
	<div class="container clearfix">		
	<div id="et-info">
			<span style="margin-top: 5px;" class="fa fa-phone"> 021-57931911 &nbsp;&nbsp;</span>
				<a style="margin-top: 5px;" href="mailto:info@sinergiaeducation.com"><p class="fas fa-envelope text-white">  info@sinergiaeducation.com</p></a>
  
  <a href="https://www.facebook.com/profile.php?id=100010998673749" class="fa fa-facebook" 
  style="margin-right: 10px; margin-left: 20px; color: white;"> </a>
	<a href="https://twitter.com/sinergiajkt" class="fa fa-twitter" style="margin-right: 10px; color: white;"></a>
	<a href="https://www.instagram.com/sinergiaeducation/" class="fa fa-instagram" style="margin-right: 10px; color: white;"></a>
	<a href="https://www.youtube.com/watch?v=0a1Xs94Bxtg" class="fa fa-youtube" style="margin-right: 10px; color: white;"></a>
	<a href="https://id.pinterest.com/hrdsenayan12/" class="fa fa-pinterest" style="margin-right: 10px; color: white;"></a>
  <a href="https://www.linkedin.com/company/sinergia-worldwide-education/" class="fa fa-linkedin" style="margin-right: 10px; color: white;"></a>
  <a href="#" class="fa fa-google-plus" style="margin-right: 10px; color: white;"></a>
  <a href="#" class="fa fa-rss" style="margin-right: 10px; color: white;"></a>
		
  </div> <!-- #et-info -->
  </div>
</div>

<div>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="margin-top: 30px; height:120px; font-size: 1.5em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a class="navbar-brand" href="{{url('home')}}"><img src="{{ asset('images/logo-1.png') }}" style="width:230px;height:70px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}" style="margin-left: 35px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}" style="margin-left: 5px;">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="margin-left: 10px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programmes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 5px;">
          <a class="dropdown-item" href="{{url('pre-school')}}">Pre-Schoole Level</a>
          <a class="dropdown-item" href="{{url('kindergarten')}}">Kindergarten</a>
          <a class="dropdown-item" href="{{url('primary')}}">Primary</a>
          <a class="dropdown-item" href="{{url('secondary-1')}}">Secondary 1</a>
          <a class="dropdown-item" href="{{url('igcse')}}">0 Level / IGCSE</a>
          <a class="dropdown-item" href="{{url('a-as-level')}}">A / AS Level</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admission')}}" style="margin-left: 5px;">Admission Sinergia Homeschooling</a>
      </li>
      
      <li class="nav-item" style="margin-left: 5px;">
        <a class="nav-link" href="#">News</a>
      </li>
      
      <li class="nav-item" style="margin-left: 5px;">
        <a class="nav-link" href="#">Article</a>
      </li>
      
      <li class="nav-item" style="margin-left: 5px;">
        <a class="nav-link" href="{{url('contact')}}">Contact</a>
      </li>
    </ul>
  </div>
</nav>
</div>