<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});


// Route::get('/', function () {
//     return redirect()->route('pages.index');
// });