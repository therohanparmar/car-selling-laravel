<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // All Cars
        $cars = Car::get();

        // Published Car
        // $cars = Car::where('publushed_at', '!==', null)->get();
        // dump($cars);

        return view('home.index');
    }
}
