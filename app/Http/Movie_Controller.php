<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Movie_Controller extends Controller
{

  function binhchoncao()
  {
    $phim = DB::table("movie as p")
    ->select("p.movie_name", "p.release_date", "p.vote_average")
    ->orderBy("p.vote_average", "desc")
    ->limit(10)
    ->get();
    
     return view("Binh_chon_cao",compact("phim"));        
  }
}