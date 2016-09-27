<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVehiclesRequest;
use App\Http\Requests\UpdateVehiclesRequest;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('vehicles.create', $relations);
    }

    public function store(StoreVehiclesRequest $request)
    {
        Vehicle::create($request->all());

        return redirect()->route('vehicles.index');
    }

    public function show($id)
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'id')->prepend('Please select', ''),
            
        ];

        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.show',compact('vehicle') + $relations);
    }

    public function edit($id)
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'id')->prepend('Please select', ''),
            
        ];

        
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit',compact('vehicle') + $relations);
    }

    public function update(UpdateVehiclesRequest $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        return redirect()->route('vehicles.index');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index');
    }
}
