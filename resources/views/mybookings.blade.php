<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyShow</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('userstyle/img/fav.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('userstyle/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userstyle/style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="{{asset('style/js/bootstrap.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>

    <!-- JavaScript -->
    <script src="{{ asset('userstyle/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{{ asset('userstyle/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/wow.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('userstyle/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <style>
        /* Add this style block or integrate it with your existing styles */
        .navbar {
            background-color: #333; /* Adjust the color to match your dark background */
            color: #fff; /* Adjust the text color to be visible on the dark background */
            padding-left: 20px; /* Add padding to the left */
        }

        .navbar-heading {
            margin-bottom: 0; /* Remove default margin for better alignment */
            display: flex;
            align-items: center; /* Center the text and icon vertically */
        }

        .navbar-heading img {
            margin-right: 10px; /* Add space between the logo and text */
        }

        .footer {
            background-color: #333; /* Adjust the color to match your dark background */
            color: #fff; /* Adjust the text color to be visible on the dark background */
            padding: 30px 0; /* Add padding top and bottom */
        }

        .footer h3 {
            color: #fff; /* Adjust the color of footer headings */
        }

        body {
            background-color: #f8f9fa; /* Set a light background color */
        }

        .centered-card {
            max-width: 500px; /* Adjust the maximum width of the card */
            margin: 0 auto; /* Center the card horizontally */
            margin-top: 50px; /* Add some top margin for vertical centering */
            overflow: hidden;
            margin-bottom: 50px;
            box-shadow: #424040;
        }

        .movie-details {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            margin-top: 30px;
            padding: 20px;
        }

        .movie-details img {
            width: 150px;
            height: 225px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .movie-details-content {
            flex-grow: 1;
        }

        .movie-details h2 {
            color: #333;
            font-size: 1.8rem; /* Increase font size for movie name */
            margin-bottom: 10px; /* Add space below movie name */
        }

        .movie-details p {
            color: #555;
            margin-bottom: 15px; /* Increase space between details */
            font-size: 1.2rem; /* Increase font size for other details */
        }

        .btn-primary {
            display: inline-block;
            margin-top: 10px; /* Add space above the button */
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

            <nav class="navbar">
                <div class="navbar-left">
                    <h2 class="navbar-heading">
                        <ion-icon name="film-outline"></ion-icon>&nbsp; CINEPLEX
                    </h2>
                </div>

                <div class="right-container">
    <!-- Replace the logout button with an icon -->
    <a href="{{ url('home') }}" style="margin-right: 15px; color: #fff; font-size: 24px; line-height: 24px;">
        <ion-icon name="home-outline"></ion-icon>
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
        <ion-icon name="log-out-outline" style="color: #fff; font-size: 24px; line-height: 24px;"></ion-icon>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

            </nav>

            <div class="container">
                <h2 class="mb-4">My Bookings</h2>

                @forelse ($bookings as $booking)
                    <div class="movie-details">
                        <img src="{{ $booking->image }}" alt="{{ $booking->moviename }}">
                        <div class="movie-details-content">
                            <h2>{{ $booking->movie_name }}</h2>
                            <p><strong>Theatre:</strong> {{ $booking->tname }}</p>
                            <p><strong>Date:</strong> {{ $booking->date }}</p>
                            <p><strong>Time:</strong> {{ $booking->time }}</p>
                            <p><strong>Price:</strong> ${{ $booking->price }}</p>
                        </div>
                    </div>
                @empty
                    <p>No bookings found.</p>
                @endforelse
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
