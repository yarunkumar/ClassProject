<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Station;
use App\AllAsset;
use App\Vehicle;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        $stations = Station::count();
        $vehicles = Vehicle::count();
        $assets = AllAsset::count();

        return view('home', compact('todos','stations', 'vehicles', 'assets'));
    }

}
