@extends('theatre.base')
@section('base')


    <div class="container mt-4">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">

                <h2 class="text-dark mb-4">Edit Assign Details</h2>

                <form action="{{url('updateUserTheatre/'.$edit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Movie Name</label>
                            <input type="text" class="form-control" id="movieName" name="moviename" value="{{$edit->moviename}} ">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Movie Image</label>
                            <input type="file" class="form-control" id="movieImage" name="image"  ><br>
                            <img src="{{$edit->image}}" height="100" width="100" />
                        </div>

                        

                        <div class="col-md-6 mb-3">
                            <label for="time" class="form-label">Show Time</label>
                            <input type="time" class="form-control" id="movieTime" name="time" value="{{$edit->time}}" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="seats" class="form-label">Available seats</label>
                            <input type="number" class="form-control" id="availableSeats" name="seats" value="{{$edit->seats}}" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Show Date</label>
                            <input type="date" class="form-control" id="movieDate" name="date" value="{{$edit->date}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Ticket Price</label>
                            <input type="number" class="form-control" id="moviePrice" name="price" value="{{$edit->price}}">
                        </div>

                        
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</main>
@endsection
