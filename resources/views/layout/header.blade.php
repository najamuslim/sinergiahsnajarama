<head>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="margin-top: 30px; height:120px; font-size: 1.3em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <a class="nav-link dropdown-toggle" style="margin-left: 10px;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programmes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 5px;">
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
        <a class="nav-link" href="{{url('news')}}">News</a>
      </li>
      
      <li class="nav-item" style="margin-left: 5px;">
        <a class="nav-link" href="#">Article</a>
      </li>
      
      <li class="nav-item" style="margin-left: 5px;">
        <a class="nav-link" href="{{url('contact')}}">Contact</a>
      </li>

      @if (Auth::user())
        <li class="nav-item dropdown" style="margin-left: 5px;">
          <a id="navbarDropdown" class="nav-link 	fas fa-user-circle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="dropdown-toggle" style="margin-left: 5px;"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <p style="text-align: center;">
              Halo {{ Auth::user()->name }}!
            </p>
            <hr>
            <a class="dropdown-item" href="{{ route('list-registrant') }}">
              List Registrant
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </li>
      @endif
      
    </ul>
  </div>
</nav>
</div>