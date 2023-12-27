<?php

namespace App\Http\Controllers;
use App\Models\theatre;
use App\Models\movie;
use App\Models\usertheatre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //
// ........................................admin/theatre......................


public function indexTheatre()
{
// return view('admin.theater', compact('data'));
$data = DB::table('theatre')
->join('users', 'theatre.userid', '=', 'users.id')
->select('theatre.*', 'users.email as user_email')
->get();

    
    
    return view('admin.theatre', compact('data'));
}

public function createTheatre()
{
    $data = DB::table('theatre')
    ->join('users', 'theatre.userid', '=', 'users.id')
    ->select('theatre.*', 'users.email as user_email')
    ->get();
    return view('admin.theatre', compact('data'));
}




public function storeTheatre(Request $request)
{
    $data = $request->except('location','quantity','_token');
    $data['type']=2;
    $data['password'] = Hash::make($data['password']);


    $var = DB::table('users')->insertGetId($data);
    DB::table('theatre')->insert([
        'name'=>$request->name,
        'location'=>$request->location,
        'quantity'=>$request->quantity,
        'userid'=>$var


    ]);
    return redirect('indexTheatre');
}

    public function editTheatre($id)
    {

        $find = theatre::join('users', 'theatre.userid', '=', 'users.id')
        ->select('theatre.*', 'users.email as user_email')
        ->find($id);


       
        return view('admin.editt',compact('find'));
    }
    public function updateTheatre(Request $request, $id)
    {
        //
        


       
        $update = theatre::find($id);

    // Update adtheaters table
    $update->update($request->only(['name', 'location', 'quality']));

    // Update users table
    $userUpdate = [
        'email' => $request->input('email'),
        // Add other user fields that you want to update
    ];
    DB::table('users')->where('id', $update->userid)->update($userUpdate);

    return redirect('indexTheatre');

    }
    public function destroyTheatre($id)
    {
        //
        theatre::destroy($id);
        return back();
    }

// ......................................admin/movie...................


public function movieIndex()
{
    $show=movie::all();
    
    $theatres = theatre::all();
    return view('admin.movies', compact('theatres','show'));
}


public function storeMovie(Request $request)
{
    // Validate the form data

    // Create a new instance of your model
    $movie = new movie;

    // Assign values to the model's attributes
    $movie->moviename = $request->input('moviename');
    $movie->theatre_id = $request->input('theatre_id');
    $movie->genre = $request->input('genre');

    $filename = time() . $request->file('image')->getClientOriginalName();
    $path = $request->file('image')->storeAs('images', $filename, 'public');
    $movie->image = '/storage/' . $path;

    $movie->certificate = $request->input('certificate');
    $movie->length = $request->input('length');
    $movie->language = $request->input('language');

    // Save the new movie record
    $movie->save();

    // Update the theatrename using the theatre_id
    //for storing theatre name in movie table
    $theatre = theatre::find($request->input('theatre_id'));
    $movie->update(['theatrename' => $theatre->name]);

    return redirect('movieIndex');
}


public function editMovie($id)
    {
        //
        $data= movie::find($id);
        
        $theatres = theatre::all();
       
        return view('admin.editm',compact('data','theatres'));
    }

    public function updateMovie(Request $request, $id)
    {
        //
        $movie = movie::find($id);
        $movie->moviename = $request->input('moviename');
    $movie->theatre_id = $request->input('theatre_id');
    $movie->genre = $request->input('genre');
    $movie->certificate = $request->input('certificate');
    
    $movie->length = $request->input('length');
    $movie->language = $request->input('language');


        
        if($request->file('image')!=null){
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $requestdata='/storage/'.$path;
            $new=$request->all();
            $photoarr=['image'=>$requestdata];
            $movie->update(array_merge($new,$photoarr));

        }else{
            $movie->update($request->all());
        }


        return redirect('movieIndex');

    
    }
    public function destroyMovie($id)
    {
        //
        movie::destroy($id);
        return back();
    }


    // ............................theatre/tdashboard.............................

    public function userTheatreIndex()
    {
        
        
            $movielist =  DB::table('movie')
            ->select('theatre.*','movie.*')
            ->join('theatre', 'theatre.id', '=', 'movie.theatre_id')
            
            ->get();

            $theatreId = Auth::user()->id;
        
            $show = DB::table('usertheatre')
                ->select('usertheatre.*', 'movie.*')
                ->join('movie', 'movie.id', '=', 'usertheatre.moviename')
                ->where('usertheatre.theatre_id', $theatreId)
                ->get();
        
            // Fetch user booking details
            $bookingDetails = DB::table('orders')
                ->select('orders.*', 'users.name as user_name', 'movie.moviename as movie_name')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->join('movie', 'movie.id', '=', 'orders.movie_id')
                ->where('orders.theatre_id', $theatreId)
                ->get();
        
            return view('theatre.tdashboard', compact('show', 'movielist', 'bookingDetails'));
        }
        
    
public function storeUserTheatre(Request $request)
{
    // Add the theatre_id to the request data
   



    // Assign values to the model's attributes
      $movie = new usertheatre;

    // Assign values to the model's attributes
    $movie->moviename = $request->input('moviename');
    
    $filename = time() . $request->file('image')->getClientOriginalName();
    $path = $request->file('image')->storeAs('images', $filename, 'public');
    $movie->image = '/storage/' . $path;

    // Set the theatre_id to the ID of the currently logged-in theatre user
    $movie->theatre_id = $request->input('theatre_id');

    $movie->time = $request->input('time');
    $movie->seats = $request->input('seats');
    $movie->date = $request->input('date');
    $movie->price = $request->input('price');
    
    // Save the new usertheatre record
    $movie->save();

    // Redirect to the theatre dashboard or wherever you need to go
    return redirect('userTheatreIndex');



   




}
public function editUserTheatre($id)
    {
        $edit= usertheatre::find($id);
        return view('theatre.edittheatre',compact('edit'));
    }
public function updateUserTheatre(Request $request, $id)
    {
        //
        





        $movie = usertheatre::find($id);
        $movie->moviename = $request->input('moviename');
   
    $movie->time = $request->input('time');
    $movie->seats = $request->input('seats');
    $movie->date = $request->input('date');
    $movie->price = $request->input('price');


        
        if($request->file('image')!=null){
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $requestdata='/storage/'.$path;
            $new=$request->all();
            $photoarr=['image'=>$requestdata];
            $movie->update(array_merge($new,$photoarr));

        }else{
            $movie->update($request->all());
        }


        return redirect('userTheatreIndex');

    


    }
    public function destroyUserTheatre($id)
    {
        //
        usertheatre::destroy($id);
        return back();
    }

    // .....................................home..........................

    public function indexHome()
    {
        //
        // $shows = usertheatre::with('movie', 'theatre')->get();
        
       

      
        $shows = DB::table('usertheatre')
       ->select('usertheatre.*','theatre.*','movie.*','usertheatre.id as uid')
    ->join('movie','movie.id','=','usertheatre.moviename')
    ->join('theatre','theatre.id','=','usertheatre.theatre_id')
    ->groupBy('usertheatre.id')
    ->get();

    return view('home', compact('shows'));
   
    }

    public function viewDetails($id)
{
    
   

    // Fetch related details using join
    $view = DB::table('usertheatre')
    ->select('usertheatre.*','movie.*','movie.moviename as mname','usertheatre.image as mimg','movie.theatrename as tname','movie.id as mid')
    
    ->join('movie', 'movie.id', '=', 'usertheatre.moviename')
    ->where('usertheatre.moviename', $id)
    ->first();


    return view('moviedetail', compact('view'));

}

public function storeDetails(Request $request)
{
    
    DB::table('orders')->insert([
        'theatre_id'=>$request->theatre_id,
        'movie_id'=>$request->movie_id,
        'user_id'=>$request->user_id,
        'image'=>$request->image,
        'movie_name'=>$request->movie_name,
        'theatre_name'=>$request->theatre_name,
        'price' => intval($request->price),
        'time'=>$request->time,
        'date'=>$request->date,
        


    ]);
    return redirect('home');
}
public function mybookings(){
    
$userId = Auth::user()->id;



$bookings = DB::table('orders')
->select('orders.*','usertheatre.*', 'users.name as user_name', 'movie.moviename as movie_name','movie.theatrename as tname')
->join('users', 'users.id', '=', 'orders.user_id')
->join('movie', 'movie.id', '=', 'orders.movie_id')
->join('usertheatre', 'usertheatre.moviename', '=', 'orders.movie_id')
->where('orders.user_id', $userId)
->get();

return view('mybookings', compact('bookings'));

}



    
}
