<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStationsRequest;
use App\Http\Requests\UpdateStationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\MobileComputer;
use Auth;

class StationsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $stations = Station::all();

        return view('stations.index', compact('stations'));
    }

    public function create()
    {
        $relations = [
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),


        ];
        
        return view('stations.create');
    }

    public function store(StoreStationsRequest $request)
    {
//        dd($request);

        $request = $this->saveFiles($request);
        Station::create($request->all());

        return redirect()->route('stations.index');
    }

    public function show($id)
    {
        $station = Station::findOrFail($id);
        return view('stations.show',compact('station'));
    }

    public function edit($id)
    {
        
        $station = Station::findOrFail($id);
        return view('stations.edit',compact('station'));
    }

    public function update(UpdateStationsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $station = Station::findOrFail($id);
        $station->update($request->all());

        return redirect()->route('stations.index');
    }

    public function destroy($id)
    {
        $station = Station::findOrFail($id);
        $station->delete();

        return redirect()->route('stations.index');
    }
}
