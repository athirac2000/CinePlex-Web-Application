<?php

namespace App\Http\Controllers;
use App\Models\movie;
use App\Models\usertheatre;
use App\Models\theatre;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $shows = DB::table('usertheatre')
    ->select('usertheatre.*', 'movie.*','usertheatre.id as uid','usertheatre.image as mimg','movie.moviename as mname')
    ->join('movie', 'movie.id', '=', 'usertheatre.moviename')
    
->get();




// dd($shows);
    return view('home',compact('shows'));
}



    public function adminhome(){
        $movies=movie::all();
        return view('admin.dashboard',compact('movies'));
    }

    public function theatrehome(){
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
        ->select('orders.*','usertheatre.*', 'users.name as user_name', 'movie.moviename as movie_name')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->join('movie', 'movie.id', '=', 'orders.movie_id')
        ->join('usertheatre', 'usertheatre.moviename', '=', 'orders.movie_id')
        ->where('usertheatre.theatre_id', $theatreId)
        ->get();
        

    return view('theatre.tdashboard', compact('show', 'movielist', 'bookingDetails'));
    
    }
}
