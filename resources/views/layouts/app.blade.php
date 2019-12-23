<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | Basic English School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/custom.css">
  <link rel="shortcut icon" href="/images/logo_1.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <style>
      *{
        font-family: 'Montserrat', sans-serif;
      }
  </style>
@yield('bs')
</head>
<body>
  <div class="container-fluid">
    <div class="row" style="color: #7bb0d6;
    background-color: #004677;">
        <div class="col-sm-9 text-capitalize p-3 mx-auto">
            <span class="font-weight-bold" id="head-title">school for pre-kindergarten through eighth grade</span>
        </div>
    </div>
</div>
  <nav class="navbar navbar-custom navbar-expand-lg navbar-light px-sm-9 py-sm-3 p-3" style="background-color: rgba(0, 48, 87, 0.7)">
    <a class="navbar-brand w-75 w-md-100" href="/">
        <img src="images/logo_1.png" class="w-10" alt="School Logo">
        <span class="pos-t-4 pl-2 display-5">Basic English School</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto display-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ABOUT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/about">Why us?</a>
                <a class="dropdown-item" href="/about-school">About Our School</a>
                <a class="dropdown-item" href="/contact">Contact</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ADMISSION
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Welcome</a>
                <a class="dropdown-item" href="#">Testimonial</a>
                <a class="dropdown-item" href="#">Visit</a>
                <a class="dropdown-item" href="#">Apply</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LEARNING
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nursery To UKG</a>
                <a class="dropdown-item" href="#">Class 1 <sup>ST</sup> 4 <sup>TH</sup></a>
                <a class="dropdown-item" href="#">Class 5 <sup>TH</sup> 8 <sup>TH</sup></a>
            </div>
        </li>
    </ul>
    </div>
</nav>
    @yield('content')
    <section style="background:#222!important" class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 text-md-left text-center" style="padding-bottom: 3.5rem !important;">
            <ul class="list-group">
              <li class="list-group-item h1 pb-0 mb-0 text-uppercase">Links</li>
              <div class="border-bottom mr-md-auto mx-auto ml-md-3" style="width:8rem;"></div>
              <a href="/" class="list-group-item a">Home</a>
              <a href="/about" class="list-group-item a">About</a>
              <a href="/admission" class="list-group-item a">Admission</a>
            </ul>
          </div>
          <div class="col-md-4 pt-1 text-center" style="padding-bottom: 1.5rem!important;padding-top: 2.25rem !important; background:#2c2c2c">
            <ul class="list-group p">
              <li class="list-group-item">
                <img src="images/logo_1.png" class="w-25" alt="School Logo">
              </li>
              <li class="list-group-item" style="padding-top: 3rem;">Basic English School</li>
              <div>
              <li class="list-group-item">Dagon Ka Mohalla Old<br>Bikaner, Rajasthan<br>334001</li>
              <li class="list-group-item">9632587410</li>
              <li class="list-group-item"><a href="mailto:basicenglishschool2020@gmail.com" id="mail">basicenglishschool2020@gmail.com</a></li>
              </div>
            </ul>
          </div>
          <div class="col-md-4 text-md-right text-center" style="padding-bottom: 3.5rem !important;">
            <ul class="list-group">
              <li class="list-group-item h1 pb-0 mb-0 text-uppercase">Other</li>
              <div class="border-bottom ml-md-auto mx-auto mr-md-3" style="width:8rem;"></div>
              <a href="/gallery" class="list-group-item a">Gallery</a>
              <a href="/courses" class="list-group-item a">Courses</a>
              <a href="/contact" class="list-group-item a">Contact Us</a>
            </ul>
          </div>
        </div> 
      </div>
    </section>
    <div class="container-fluid px-4 pt-4 pb-0" style="color: #7bb0d6;
    background-color: #004677;">
      <div class="row">
        <div class="col-12 text-center">
          <p class="text-white float-left">Copyright © Basic English School. All rights reserved.</p>
          <a href="https://www.itplus.co.in/" class="float-md-right text-white" target="_blank">Powered by IT Plus </a>
        </div>
      </div>
    </div>
<script src="/js/app.js"></script>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
        $('.navbar').removeClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').addClass('p-cstm fixed-top');
        $('.navbar').css('padding-right','0');
        $('.main').removeClass('mt-7');
        $('.main').addClass('mt-9');
    } else {
        $('.navbar').addClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').removeClass('p-cstm fixed-top');
        $('.main').addClass('mt-7');
        $('.main').removeClass('mt-9');
    }
}
</script>
@yield('js')
</body>
</html>
