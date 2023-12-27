@extends('theatre.base')
@section('base')
<div class="container">

    <!-- Page Heading -->
    
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h2 mb-0 text-dark font-weight-bold">Manage Movie Schedules</h1>
    </div>


    <div class="card shadow mb-4" style="max-width: 1200px; margin: auto;">
        <div class="card-body">
            <form action="{{url('storeUserTheatre')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="movieName" class="form-label">Movie Name</label>
                    <select name="moviename" class="form-select" aria-label="Default select example">
                        <option value="">Select Movie</option>
                        dd($movielist->moviename);
                        @foreach($movielist as $movies)
                            <option value="{{ $movies->id }}">
                            
                                {{ optional($movies)->moviename }} {{-- Use optional() to avoid null error --}}
                            </option>
                        @endforeach
                    </select>
                    
                </div>


                <div class="mb-3">
                    <label for="movieImage" class="form-label">Movie Image</label>
                        <input type="file" class="form-control" id="floatingInput" name="image" placeholder="Enter Movie Image" required>
        
                    
                </div>

                <!-- Add this line within your form in tdashboard.blade.php -->
                <input type="hidden" name="theatre_id" value="{{ auth()->user()->id }}">



                <div class="mb-3">
                    <label for="movieTime" class="form-label">Show Time</label>
                    <input type="time" class="form-control" id="movieTime" name="time" required>
                </div>

                <div class="mb-3">
                    <label for="availableSeats" class="form-label">Available Seats</label>
                    <input type="number" class="form-control" id="availableSeats" name="seats" placeholder="Enter Available Seats" required>
                </div>

                <div class="mb-3">
                    <label for="movieDate" class="form-label">Show Date</label>
                    <input type="date" class="form-control" id="movieDate" name="date" required>
                </div>

                <div class="mb-3">
                    <label for="moviePrice" class="form-label">Ticket Price</label>
                    <input type="number" class="form-control" id="moviePrice" name="price" placeholder="Enter Ticket Price" required>
                </div>
                
                
                <button type="submit" class="btn btn-success">Save Details</button>
            </form>
        </div>
    </div>
    <div class="card shadow mt-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Movie Image</th>
                            <th>Show Time</th>
                            <th>Available Seats</th>
                            <th>Show Date</th>
                            <th>Ticket Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show as $item)
                        <tr>
                            <td>{{$item->moviename}}</td>
                            <td><img src="{{$item->image}}" height="100" width="100" /></td>
                            <td>{{$item->time}}</td>
                            <td>{{$item->seats}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <div style="display: flex;flex-direction: row;align-items: center;">
                                    <a href="{{url('editUserTheatre/'.$item->id) }}" class="btn btn-success"
                                        style="text-align: center;">Edit</a>&nbsp;&nbsp;<br><br>
                                    <form method="post" action="{{url('destroyUserTheatre'.'/'.$item->id)}}">
                                        @csrf
                                        <button class="btn btn-danger" style="text-align: center;">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- User Booking Details Section -->
<div class="card shadow mt-4">
        <div class="card-body">
            <h2 class="h4 mb-4 text-dark font-weight-bold">User Booking Details</h2>

            <div class="row">
                @forelse($bookingDetails as $booking)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><strong>User:</strong> {{ $booking->user_name }}</p>
                            <p class="card-text"><strong>Movie:</strong> {{ $booking->movie_name }}</p>
                            <p class="card-text"><strong>Time:</strong> {{ $booking->time }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $booking->date }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $booking->price }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="col-md-12">No bookings available.</p>
                @endforelse
            </div>

        </div>
    </div>

</div>
@endsection