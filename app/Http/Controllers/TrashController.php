<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Vehicle;

class TrashController extends Controller
{

    /**
     * Display a listing of soft deleted items.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $stations = Station::onlyTrashed()
            ->orderBy('id')
            ->get();

        $vehicles = Vehicle::onlyTrashed()
            ->orderBy('id')
            ->get();

        $relation = $stations ->merge($vehicles);

        return view('trashes.index', compact ('relation','stations','vehicles'));
    }

    public function show($id)
    {

        $vehicle = Vehicle::onlyTrashed()->findOrFail($id);
        $vehicle->restore();


        return redirect()->route('trashes.index');
//                return view('vehicles.show', compact('vehicle'));
    }

    public function edit($id)
    {
        $station = Station::onlyTrashed()->findOrFail($id);
        $station->restore();
        return redirect()->route('trashes.index');
    }


    public function destroy($id)
    {
        $station = Station::onlyTrashed()->findOrFail($id);
        $station->forceDelete();

        return redirect()->route('trashes.index');
    }

    public function vehicleDestroy(Request $request)
    {
        $id = $request->id;
        $vehicle = Vehicle::onlyTrashed()->findOrFail($id);
        $vehicle->forceDelete();

        return redirect()->route('trashes.index');
    }
}
