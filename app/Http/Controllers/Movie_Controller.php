<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Movie_Controller extends Controller
{
<<<<<<< HEAD
    public function genre()
    {
        $genres = DB::table('genre')->get();
        return view('genre', compact('genres'));
    }

    public function topMovie()
    {
        $movies = DB::table('movie')
            ->where('vote_average','>',8)
            ->where('vote_count','>',10000)
            ->get();

        return view('topmovie',compact('movies'));
    }
}
=======
    function FilmCanada()
    {
       $movies = DB::table("movie")
            ->select("movie_name", "release_date", "runtime")
            ->where("country_name", "Canada")
            ->get();

        return view("filmcanada", compact("movies"));
    }
}
>>>>>>> 8b01854ac15af6f88486dbc927d21ae414f66f7e
