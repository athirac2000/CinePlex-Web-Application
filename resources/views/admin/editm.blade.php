@extends('admin.base')
@section('base')

<div class="container mt-4">
    <h2 class="text-primary mb-4">Edit Movie Details</h2>

    <form action="{{url('updateMovie/'.$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieName" class="form-label">Movie Name</label>
                    <input type="text" class="form-control" id="movieName" name="moviename"
                        value="{{$data->moviename}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="theater" class="form-label">Select Theater</label>
                    <select name="theatre_id" class="form-select" aria-label="Select Theater" required>
                        <option value="" disabled>Select Theater</option>
                        @foreach($theatres as $theatre)
                        <option value="{{ $theatre->id }}" @if($theatre->id == $data->theatre_id) selected @endif>
                            {{ $theatre->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieGenre" class="form-label">Movie Genre</label>
                    <input type="text" class="form-control" id="movieGenre" name="genre" value="{{$data->genre}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieImage" class="form-label">Upload Movie Image</label>
                    <input type="file" class="form-control" id="movieImage" name="image" >
                    <img src="{{$data->image}}" height="100" width="100" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieCertificate" class="form-label">Movie Certificate</label>
                    <input type="text" class="form-control" id="movieCertificate" name="certificate"
                        value="{{$data->certificate}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieLength" class="form-label">Length of Movie</label>
                    <input type="text" class="form-control" id="movieLength" name="length" value="{{$data->length}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="movieLanguage" class="form-label">Movie Language</label>
                    <input type="text" class="form-control" id="movieLanguage" name="language"
                        value="{{$data->language}}">
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-success btn-lg">Update Movie Details</button>
        </div>
    </form>
</div>

@endsection