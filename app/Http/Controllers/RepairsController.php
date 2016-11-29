<?php

namespace App\Http\Controllers;

use App\Repair;
use App\Vehicle;
use App\AllAsset;
use Illuminate\Http\Request;
//use Illuminate\Support\Collection;


class RepairsController extends Controller
{

    /**
     * Display a listing of Repair.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $assets= AllAsset::where(function($query) {
            $query->where('status_id', '2');
        })
            ->get();

        $vehicles= Vehicle::where(function($query) {
            $query->where('status_id', '2');
        })
            ->get();



        $relation = $assets ->merge($vehicles);
//        dd($relation);
        return view('repairs.index', compact('relation') );
    }

    /**
     * Display Repair.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $repairs = $relations;

        return view('repairs.show', compact('repairs'));
    }

}
