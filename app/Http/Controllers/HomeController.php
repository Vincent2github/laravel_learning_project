<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        return view('home.index')
        ->with('name','wayanasanat')
        ->with('age','10000')
        ->with('job','<b> Developer </b>')
        ;
    }
}
