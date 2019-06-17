<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('entity')->user();

    //dd($users);

    return view('entity.home');
})->name('home');

