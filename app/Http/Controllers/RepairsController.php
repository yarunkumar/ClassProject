<?php

namespace App\Http\Controllers;

use App\Repair;
use App\Vehicle;
use App\AllAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
//use App\Http\Requests\StoreRepairsRequest;
//use App\Http\Requests\UpdateRepairsRequest;

class RepairsController extends Controller
{

    /**
     * Display a listing of Repair.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $assets = AllAsset::all()->where('status_id', '2');
        $vehicles = Vehicle::all()->where('status_id', '2');

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
