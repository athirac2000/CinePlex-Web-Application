@extends('admin.base')
@section('base')


<form action="{{url('storeTheatre')}}" method="POST" enctype="multipart/form-data">
@csrf
    <!-- Content Row -->
    <div class="row" style="display: flex;flex-direction:row;">
        <!-- Add additional content rows as needed -->

        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Enter theater name">
                <label for="floatingInput">Enter theater name</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="location"
                    placeholder="Enter theater name">
                <label for="floatingInput">Enter Location</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="quantity"
                    placeholder="Enter theater name">
                <label for="floatingInput">Enter Quantity</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Enter email">
                <label for="floatingInput">Enter Email</label>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" name="password"
                    placeholder="Enter password">
                <label for="floatingInput">Enter password</label>
            </div>
        </div><br><br>





    </div>
    <input type="submit" class="btn btn-primary" value="Submit">

    </div>
</form><br><br>

<div class="row">
    <div class="table-responsive small">
        <table class="table table-hover table-primary table-striped"
            style="width: 95%;margin-left: 10px;align-items: center;">
            <tr>
                <th>Theater</th>
                <th>Location</th>
                <th>Quantity</th>
                <th>Email</th>

                <th>Action</th>
            </tr>
            @foreach($data as $item)
            <tr>
               
                <td>{{$item->name}}</td>
                <td>{{$item->location}}</td>

                <td>{{$item->quantity}}</td>
                <td>{{$item->user_email}}</td>
                

                <td>
                    <div style="display: flex;flex-direction: row;align-items: center;">
                        <a href="{{url('editTheatre/'.$item->id) }}" class="btn btn-success"
                            style="text-align: center;">Edit</a>&nbsp;&nbsp;<br><br>
                        <form method="post" action="{{url('destroyTheatre'.'/'.$item->id)}}">
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