
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
                    <button class="signin" onclick="document.getElementById('id01').style.display='block'">Signin</button>
                </div>
            </nav>

            

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

                    <div class="movie">
                        <div class="card">
                            <img src="{{asset('userstyle/img/poster/poster1.jpg')}}" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>93% &ThinSpace; 928 votes</p>
                            </div>
                        </div>
                        <h3>Theerppu</h3>
                        <p class="detail">Drama/Thriller</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="{{asset('userstyle/img/poster/poster2.jpg')}}" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>92% &ThinSpace; 16k votes</p>
                            </div>
                        </div>
                        <h3>Thallumaala</h3>
                        <p class="detail">Action/Comedey</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="{{asset('userstyle/img/poster/poster3.jpg')}}" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>94% &ThinSpace; 14k votes</p>
                            </div>
                        </div>
                        <h3>Nna Thaan Case Kodu</h3>
                        <p class="detail">Comedy/Drama</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="{{asset('userstyle/img/poster/poster4.jpg')}}" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>59% &ThinSpace; 74k votes</p>
                            </div>
                        </div>
                        <h3>Liger</h3>
                        <p class="detail">Action/Drama/Romantic</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="{{asset('userstyle/img/poster/poster5.jpg')}}" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>87% &ThinSpace; 34k votes</p>
                            </div>
                        </div>
                        <h3>Thiruchitrambalam</h3>
                        <p class="detail">Comedy/Drama/Musical</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/poster6.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>92% &ThinSpace; 120k votes</p>
                            </div>
                        </div>
                        <h3>Sita Ramam</h3>
                        <p class="detail">Action/Drama/Romantic</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/poster7.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>3k likes</p>
                            </div>
                        </div>
                        <h3>Kudukka 2025</h3>
                        <p class="detail">Drama/Thriller</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/poster8.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="heart-sharp"></ion-icon>
                                <p>84% &ThinSpace; 226 votes</p>
                            </div>
                        </div>
                        <h3>Peace</h3>
                        <p class="detail">Comedy/Drama/Thriller</p>
                    </div>

                    <div class="movie">
                        <div class="card">
                            <img src="img/poster/poster9.jpg" class="card-img" alt="">
                            <div class="card-body">
                                <ion-icon name="thumbs-up-sharp" style="color: green;"></ion-icon>
                                <p>111 likes</p>
                            </div>
                        </div>
                        <h3>Beyond The 7 Seas</h3>
                        <p class="detail">Drama/Fantasy/Thriller</p>
                    </div>

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