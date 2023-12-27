@extends('base')

@section('base')



@if(auth()->user()->is_admin==1)
<a href="{{url('admin/router')}}">Admin</a>
@else

<div class="container">
    
        <div class="col-md-12">
            <div style="border: 2px solid #ddd; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
            <div class="row justify-content-center">
                <div class="row" style="display: flex;flex-direction:row;">
                    <div class="col-md-4 mb-4">
                    <div class="form-floating mb-3" style="height: 60px;">

                            <label for="floatingInput">Choose Theatres easily</label>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4">
                        <div class="form-floating mb-3">

                            <select name="theater" class="form-select" aria-label="Default select example">

                                <option value="kollam">Thailekshmi</option>
                                <option value="alapuzha">D mall</option>
                                <option value="tvm">Ramraj</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
<div class="container">
        <h3 class="text-dark mb-4">Now Streaming</h3>
        <div class="row">

            <div class="card-group">

                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{asset('img/mov3.webp')}}" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title">Movie 1</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{asset('img/mov4.jpg')}}" class="card-img-top" alt="Movie 2">
                        <div class="card-body">
                            <h5 class="card-title">Movie 2</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{asset('img/mov5.webp')}}" class="card-img-top" alt="Movie 3">
                        <div class="card-body">
                            <h5 class="card-title">Movie 3</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{asset('img/mov6.webp')}}" class="card-img-top" alt="Movie 4">
                        <div class="card-body">
                            <h5 class="card-title">Movie 4</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/mov3.webp" class="card-img-top" alt="Movie 1">
                        <div class="card-body">
                            <h5 class="card-title">Movie 4</h5>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/mov4.jpg" class="card-img-top" alt="Movie 2">
                        <div class="card-body">
                            <h5 class="card-title">Movie 2</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/mov1.jpg" class="card-img-top" alt="Movie 3">
                        <div class="card-body">
                            <h5 class="card-title">Movie 3</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/mov5.webp" class="card-img-top" alt="Movie 4">
                        <div class="card-body">
                            <h5 class="card-title">Movie 4</h5>

                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Card Group -->

        </div>
        <!-- End Content Row -->
</div>

    </div>
    @endif




    @endsection