<?php

namespace App\Http\Controllers;

use App\Station;
use App\AllAsset;
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
            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),


        ];
        
        return view('stations.create', $relations);
    }

    public function store(StoreStationsRequest $request)
    {
//        dd($request);

        $request = $this->uploadFiles($request);
//        $request = $this->saveFiles($request);
        Station::create($request->all());

        return redirect()->route('stations.index');
    }

    public function show($id)
    {
         $relations = [
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),

        ];
        $station = Station::findOrFail($id);
        return view('stations.show',compact('station') + $relations);
    }
public function reassign(Request $request)
    {
        
       //dd($request); 
       $arrayValues = $request->reassignval;
       
       $newStationID = $request->station_id;
       
        foreach ($arrayValues as $key => $value) {
            $allAsset = AllAsset::findOrFail($value);

           
         $allAsset->station_id = $newStationID;
         //dd($allAsset);
            $allAsset->save();
            //dd($allAsset);
        }
        //$station = Station::findOrFail($id);
        //return view('stations.show',compact('station'));
       
       $stations = Station::all();

        return view('stations.index', compact('stations'));
    }
    public function edit($id)
    {

        $relations = [
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),

        ];
        
        $station = Station::findOrFail($id);
        return view('stations.edit',compact('station', '') + $relations);
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
