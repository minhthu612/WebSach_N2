<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formtinhtuoi', 'App\Http\Controllers\Age_Controller@formtinhtuoi');

Route::post('/tinhtuoi', 'App\Http\Controllers\Age_Controller@tinhtuoi');

Route::get("/qlsach/theloai","App\Http\Controllers\Book_Controller@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\Book_Controller@laythongtinsach");

Route::get("/baitap2","App\Http\Controllers\Book_Controller1@thongtinsachkinhdien");

Route::get("/themdulieu","App\Http\Controllers\Book_Controller2@themdulieu");
Route::get("/xoadulieu","App\Http\Controllers\Book_Controller2@xoadulieu");
Route::get("/suadulieu","App\Http\Controllers\Book_Controller2@suadulieu");
Route::get("/qlsach/theloai","App\Http\Controllers\Book_Controller2@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\Book_Controller2@laythongtinsach");

Route::get("/tranthithanhtien","App\Http\Controllers\Controller@tt");


Route::get("/DaoDangThuyVan","App\Http\Controllers\Controller@ZanThi");


Route::get("/VanCongThien","App\Http\Controllers\Controller@VanCongThien");
Route::get("/HuynhMinhThu","App\Http\Controllers\Controller@HMT");
Route::get("/TranLeDongAnh","App\Http\Controllers\Controller@tlda");

Route::get("/HoNgocTien","App\Http\Controllers\Controller@hnt");

/*7.4*/
Route::get("/topruntime","App\Http\Controllers\Movie_Controller@topRuntime");



/*7.1*/
Route::get("/genre","App\Http\Controllers\Movie_Controller@genre");

/*7.7*/
Route::get("/topmovie","App\Http\Controllers\Movie_Controller@topMovie");


Route::get("/Hienthifilm","App\Http\Controllers\Movie_Controller@FilmCanada");


Route::get("/binhchoncao","App\Http\Controllers\Movie_Controller@binhchoncao");

Route::get("/top-budget","App\Http\Controllers\Movie_Controller@topBudget");
