<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Movie_Controller extends Controller
{
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