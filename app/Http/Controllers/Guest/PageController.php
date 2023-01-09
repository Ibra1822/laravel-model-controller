<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){

        $movies = Movie::all();

        return view('home',compact('movies'));
    }

    public function top(){

     $topMovies = Movie::where('vote', '>=' ,9)->get();


        return view('top',compact('topMovies'));
    }


    public function details($id){

        //dd($id);

        $singleMovie = Movie::find($id);

        if (is_null($singleMovie)) {
            abort(404);
        }

        return view('detail',compact('singleMovie'));

    }
}


