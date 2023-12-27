@extends('admin.base')
@section('base')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

        <div class="card-group">

            @foreach($movies as $movie)
                <!-- Card -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($movie->image) }}" class="card-img-top" alt="{{ $movie->moviename }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->moviename }}</h5>
                            <p class="card-text">{{ $movie->genre }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
                        <!-- End Card Group -->

                    </div>
                    <!-- End Content Row -->

                    @endsection