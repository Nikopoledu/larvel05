<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('tech')->user();

    //dd($users);

    return view('tech.home');
})->name('home');

