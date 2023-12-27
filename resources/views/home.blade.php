@if(auth()->user()->is_admin==1)
<a href="{{url('admin/router')}}">Admin</a>
@else
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>BookMyShow</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('userstyle/img/fav.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('userstyle/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userstyle/style.css') }}">




    <script src="{{asset('style/js/bootstrap.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>




    <!-- JavaScript -->
    <script src="{{ asset('userstyle/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('userstyle/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/wow.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <style>
    /* Add this style block or integrate it with your existing styles */
    .navbar {
        background-color: #333;
        color: #fff;
        padding-left: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-left h2 {
        margin-bottom: 0;
        display: flex;
        align-items: center;
    }

    .navbar-left ion-icon {
        margin-right: 10px;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .btn-my-bookings {
        background-color: #f05461;
        color: #fff;
        border: none;
        padding: 4px 8px; /* Adjusted padding for a smaller size */
        margin-right: 8px; /* Adjusted margin for space between text and icon */
        text-decoration: none; /* Remove default link underline */
    }

    .btn-sign-out {
        color: #fff; /* Set the default text color */
        background-color: transparent; /* Set the default background color */
        border: none;
        cursor: pointer;
        font-size: 24px;
        margin-right: 8px;
        text-decoration: none;
    }

    .btn-sign-out:hover {
        color: #fff; /* Set the text color on hover (same as default) */
       color: #f05461; /* Set the background color on hover (same as default) */
    }


    .navbar-heading img {
        margin-right: 10px;
        /* Add space between the logo and text */
    }

    .footer {
        background-color: #333;
        /* Adjust the color to match your dark background */
        color: #fff;
        /* Adjust the text color to be visible on the dark background */
        padding: 30px 0;
        /* Add padding top and bottom */
    }

    .footer h3 {
        color: #fff;
        /* Adjust the color of footer headings */
    }
    </style>
</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->

        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

        <div class="navbar">
    <div class="navbar-left">
        <h2 class="navbar-heading">
            <ion-icon name="film-outline"></ion-icon>&nbsp; CINEPLEX
        </h2>
    </div>

    <div class="navbar-right">
        <!-- "My Bookings" button -->
       

        <form method="post" action="{{url('mybookings')}}">
            @csrf
            <button class="btn btn-my-bookings" type="submit">My Bookings</button>
        </form>

        <!-- Sign-out button -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-sign-out">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>


            <div class="carousel-container">
                <div class="carousel">
                    <!-- <div class="slider">
                    <img src="img/banner/banner1.webp" alt="">
                </div> -->
                </div>
            </div>

            <script src="{{asset('userstyle/js/data.js')}}"></script>
            <script src="{{asset('userstyle/js/app.js')}}"></script>

            <h1 class="title">Recommended Movies</h1>
            <div class="movies-list">
                <div class="card-container">
                    @foreach ($shows as $show)
                    <a href="{{ url('viewDetails/' . $show->id) }}" class="movie-link"
                        style="text-decoration: none;color: #333;">
                        <div class="movie">
                            <div class="card">
                                <img src="{{ $show->mimg}}" class="card-img" alt="">
                            </div>
                            <h3>{{ $show->mname }}</h3>




                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>



        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h3>Contact Us</h3>
                        <p>Email: info@cineplex.com</p>
                        <p>Phone: (123) 456-7890</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3>Follow Us</h3>
                        <!-- Add your social media links/icons here -->
                    </div>
                    <div class="col-lg-4">
                        <h3>Address</h3>
                        <p>123 Movie Street, Cityville, Country</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- End content -->

    </div>
    <!-- End wrapper -->

</body>

</html>
@endif