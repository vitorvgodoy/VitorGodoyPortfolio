<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/send', [ContactMailController::class, 'sendContactMail'])->name('contact.send');