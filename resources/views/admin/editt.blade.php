@extends('admin.base')
@section('base')


    <div class="container mt-4">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">

                <h2 class="text-dark mb-4">Edit Theater Details</h2>

                <form action="{{url('updateTheatre/'.$find->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Theater Name</label>
                            <input type="text" class="form-control" id="name" name="name"  value="{{$find->name}}" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location"  value="{{$find->location}}" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity"  value="{{$find->quantity}}" >
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"  value="{{$find->user_email}}" >
                        </div>

                        
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</main>
@endsection
