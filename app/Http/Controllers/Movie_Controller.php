<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Movie_Controller extends Controller
{
    function FilmCanada()
    {
       $movies = DB::table("movie")
            ->select("movie_name", "release_date", "runtime")
            ->where("country_name", "Canada")
            ->get();

        return view("filmcanada", compact("movies"));
    }
}
