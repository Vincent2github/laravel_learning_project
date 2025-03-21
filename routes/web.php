<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Faker\Provider\ar_EG\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
