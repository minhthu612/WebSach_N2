<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Movie_Controller extends Controller
{
    public function topBudget() {
        $movies = DB::table('movie')
            ->orderByDesc('budget')
            ->limit(10)
            ->get();

        return view('top_budget', compact('movies'));
    }
}