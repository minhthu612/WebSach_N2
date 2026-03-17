<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class Movie_Controller extends Controller
{
    public function C7_6(){
        $movies = Movie::getActionMovies();

        return view('C7_6', compact('movies'));
    }
}