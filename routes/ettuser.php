<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('ettuser')->user();

    //dd($users);

    return view('ettuser.home');
})->name('home');

