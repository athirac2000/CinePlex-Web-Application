@extends('admin.base')
@section('base')



<form action="{{url('storeMovie')}}" method="POST" enctype="multipart/form-data">
@csrf
    <!-- Content Row -->
    <div class="row" style="display: flex;flex-direction:row;">
        <!-- Add additional content rows as needed -->

        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="moviename"
                    placeholder="Enter theater name">
                <label for="floatingInput">Enter Movie name</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">



            <select name="theatre_id" class="form-select" aria-label="Default select example">
            <option value="">Select a Theatre</option>
            @foreach($theatres as $theatre)
                <option value="{{ $theatre->id }}">
                    {{ optional($theatre)->name }} {{-- Use optional() to avoid null error --}}
                </option>
            @endforeach
        </select>






            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="genre"
                    placeholder="Enter theater name">
                <label for="floatingInput">Enter Movie genre</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="floatingInput" name="image">

            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="certificate"
                    placeholder="Enter movie certificate">
                <label for="floatingInput">Enter Movie certificate</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="length"
                    placeholder="Enter length of movie">
                <label for="floatingInput">Enter length of movie</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="language"
                    placeholder="Enter length of movie">
                <label for="floatingInput">Enter movie language</label>
            </div>
        </div><br><br>





    </div>
    <input type="submit" class="btn btn-primary" value="Submit">

    </div>
</form><br><br>

<div class="row">
    <div class="table-responsive small">
        <table class="table table-hover table-primary table-striped"
            style="width: 98%;margin-left: 10px;align-items: center;">
            <tr>
                <th>Movie name</th>
                <th>Theater</th>
                <th>Genre</th>
                
                <th>certificate</th>
                <th>Length</th>
                <th>Language</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($show as $item)
            <tr>
                <td>{{$item->moviename}}</td>
                <td>{{ optional($item->theatre)->name }}</td>
                <td>{{ $item->genre }}</td>
                
                <td> {{ $item->certificate }}</td>
                <td>{{ $item->length }}</td>

                <td>{{ $item->language }}</td>
                <td><img src="{{$item->image}}" height="100" width="100" /></td>
                <td>
                    <div style="display: flex;flex-direction: row;align-items: center;">
                        <a href="{{url('editMovie/'.$item->id) }}" class="btn btn-success"
                            style="text-align: center;">Edit</a>&nbsp;&nbsp;<br><br>
                            <form method="post" action="{{url('destroyMovie'.'/'.$item->id)}}">
@csrf

                            <button class="btn btn-danger" style="text-align: center;">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection