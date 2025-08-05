<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;



Route::get('/regristrasi', function (): Factory|View {
    return view('regristrasi',);
});

Route::get('/login', function (): Factory|View {
    return view('login',);
});

Route::get('/homepage', function (): Factory|View {
    return view('homepage',);
});

Route::get('/absent', function (): Factory|View {
    return view('absent',);
});

Route::get('/project', function (): Factory|View {
    return view('project',);
});

Route::get('/logbook', function (): Factory|View {
    return view('logbook',);
});

Route::get('/finalvalue', function (): Factory|View {
    return view('finalvalue',);
});

