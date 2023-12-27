<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    

    
    <title>Shopping site</title>
   
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">



<link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('style/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">

        

        <!-- Styles -->
  
        
<link href="{{asset('css/headers.css')}}" rel="stylesheet">
<link href="{{asset('css/carousel.css')}}" rel="stylesheet">

   
    <!-- <link href="{{asset('css/carousel.css')}}" rel="stylesheet"> -->

    <style>
      

@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}

.b-example-divider {
width: 100%;
height: 3rem;
background-color: rgba(0, 0, 0, .1);
border: solid rgba(0, 0, 0, .15);
border-width: 1px 0;
box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
flex-shrink: 0;
width: 1.5rem;
height: 100vh;
}

.bi {
vertical-align: -.125em;
fill: currentColor;
}

.nav-scroller {
position: relative;
z-index: 2;
height: 2.75rem;
overflow-y: hidden;
}

.nav-scroller .nav {
display: flex;
flex-wrap: nowrap;
padding-bottom: 1rem;
margin-top: -1px;
overflow-x: auto;
text-align: center;
white-space: nowrap;
-webkit-overflow-scrolling: touch;
}

.btn-bd-primary {
--bd-violet-bg: #712cf9;
--bd-violet-rgb: 112.520718, 44.062154, 249.437846;

--bs-btn-font-weight: 600;
--bs-btn-color: var(--bs-white);
--bs-btn-bg: var(--bd-violet-bg);
--bs-btn-border-color: var(--bd-violet-bg);
--bs-btn-hover-color: var(--bs-white);
--bs-btn-hover-bg: #6528e0;
--bs-btn-hover-border-color: #6528e0;
--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
--bs-btn-active-color: var(--bs-btn-hover-color);
--bs-btn-active-bg: #5a23c8;
--bs-btn-active-border-color: #5a23c8;
}

.bd-mode-toggle {
z-index: 1500;
}

.bd-mode-toggle .dropdown-menu .active .bi {
display: block !important;
}
.body {
padding-top: 0rem;
padding-bottom: 0rem;

}

header {
background-color: #001F3F; /* Deep Blue */
color: #fff; /* Text color for contrast */
}
footer {
background-color: #001F3F; /* Deep Blue */
color: #fff; /* Text color for contrast */
}

.form-control-dark {
    border-color: var(--bs-gray);
  }
  .form-control-dark:focus {
    border-color: #fff;
    box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
  }
  
  .text-small {
    font-size: 85%;
  }
  
  .dropdown-toggle:not(:focus) {
    outline: 0;
  }

  /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

.carousel {
  margin-bottom: -1px;
}


    </style>


    
    </head>


    <body class="body">


<main >
  

 


  <header class="p-3 " >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        

        <div class="text-end">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/show') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
        @endif
        @endauth
        @endif
          
        </div>
      </div>
    </div>
  </header>


  <div id="myCarousel"  data-bs-ride="carousel" style="margin-bottom: -1px" >
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/theatre1.jpg')}}" width="100%" height="100%" />
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      
      
    </div>
   
  </div>

  <footer class="d-flex flex-wrap justify-content-between align-items-center  border-top" style="background-color:#001F3F;padding-top: 0rem;
padding-bottom: 0rem;height: 80px;">
            <p class="col-md-4 mb-0 text-body-primary">&copy; 2023
                Company, Inc</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item" ><a href="#" class="nav-link px-2 text-body-primary">Home</a></li>
                <li class="nav-item" ><a href="#" class="nav-link px-2 text-body-primary">Features</a></li>
                <li class="nav-item" ><a href="#" class="nav-link px-2 text-body-primary">Pricing</a></li>
                <li class="nav-item" ><a href="#" class="nav-link px-2 text-body-primary">FAQs</a></li>
                <li class="nav-item" ><a href="#" class="nav-link px-2 text-body-primary">About</a></li>
            </ul>
        </footer>


  
</main>


<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.js')}}"></script>
<script src="{{asset('style/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    

    </body>
</html>
