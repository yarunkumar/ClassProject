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
        
        return view('stations.create');
    }

    public function store(StoreStationsRequest $request)
    {
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
