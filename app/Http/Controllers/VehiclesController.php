<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Vehiclehis;
use App\UnitType;
use App\AllAsset;
use App\Station;
use App\Grant;
use App\Status;
use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVehiclesRequest;
use App\Http\Requests\UpdateVehiclesRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VehiclesController extends Controller
{

    /**
     * Display a listing of Vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating new Vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'stations' => \App\Station::get()->pluck('station_name', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),


        ];

        
        return view('vehicles.create', compact('') + $relations);
    }

    /**
     * Store a newly created Vehicle in storage.
     *
     * @param  \App\Http\Requests\StoreVehiclesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehiclesRequest $request)
    {
        Vehicle::create($request->all());

        return redirect()->route('vehicles.index');
    }

    /**
     * Show the form for editing Vehicle.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),

        ];

        
        $vehicle = Vehicle::findOrFail($id);
        //dd($vehicle);
        return view('vehicles.edit', compact('vehicle', '') + $relations);
    }

    /**
     * Update Vehicle in storage.
     *
     * @param  \App\Http\Requests\UpdateVehiclesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehiclesRequest $request, $id)
    {
        //dd($request);
        $vehicle = Vehicle::findOrFail($id);


        //start history code
        //storing all foreing key id s in variables
        $stationid=$vehicle->station_id;
       $statusid=$vehicle->status_id;
       $grantid=$vehicle->grant_id;
       $unittypeid=$vehicle->unittype_id;
       $vendorid=$vehicle->vendor_id;


       
       //finding relavent names against each primary key and storing it in variables
       $station = Station::find($stationid);
       $grant = Grant::find($grantid);
       $status = Status::find($statusid);
       $unit = Unittype::find($unittypeid);
       $vendor = Vendor::find($vendorid);

       //if else code to handle null values

       if($grant)
       {
        $grant_name=$grant->grant_name;
      
       }
       else
       {
        $grant_name=null;
       }

       if($station)
       {
        $station_name=$station->station_name;
       }
       else
       {
        $station_name=null;
       }

       if($status)
       {
        $status_name=$status->status;
      
       }
       else
       {
        $status_name=null;
       }
      
      if($unit)
       {
        $unittype_name=$unit->name;
      
       }
       else
       {
        $unittype_name=null;
       }
      
      if($vendor)
       {
        $vendor_name=$vendor->vendor_name;
      
       }

       else
       {
        $vendor_name=null;
       }
       
       //DB insert query to insert history values to new table

 \DB::table('vehiclehis')->insert(
            ['vehicle_id' => $vehicle->id, 'van' => $vehicle->van, 'make' => $vehicle->make, 'model' => $vehicle->model,  'year' => $vehicle->year, 'station_id' => $vehicle->station_id, 'name' => $station_name,'grant_id' => $vehicle->grant_id, 'grant_name' => $grant_name,'status_id' => $vehicle->status_id, 'status' => $status_name,'unittype_id' => $vehicle->unittype_id, 'unittype_name' => $unittype_name,'vendor_id' => $vehicle->vendor_id, 'vendor_name' => $vendor_name, "created_at" =>  \Carbon\Carbon::now('America/Chicago'), "updated_at" => \Carbon\Carbon::now('America/Chicago')  ] 
        );
        

     //end history code.

 
      $vehicle->update($request->all());
      return redirect()->route('vehicles.index');
    }

    /**
     * Display Vehicle.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'vehids' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),

        ];

        $vehicle = Vehicle::findOrFail($id);
        //below one line code is for storing all history related to the $id in variable, which is to be used to display in show page.
        $vehiclehis2 = Vehiclehis::where('vehicle_id', $id)->get();
        //dd($vehiclehis2);
        return view('vehicles.show', compact('vehicle', 'vehiclehis2') + $relations);
    }

public function reassign(Request $request)
    {
        //dd($id);
       //dd($id);
       //dd($request); 
       $arrayValues = $request->reassignval;
       //dd($arrayValues);
       $newStationID = $request->vehicle_id;
       //dd($newStationID);

        //dd(AllAsset::findOrFail(46));
//$arrayValues;
        foreach ($arrayValues as $key => $value) {
            $allAsset = AllAsset::findOrFail($value);

           
         $allAsset->vehicle_id = $newStationID;
         //dd($allAsset);
            $allAsset->save();
            //dd($allAsset);
        }
        //$station = Station::findOrFail($id);
        //return view('stations.show',compact('station'));
       
       $vehicles = Vehicle::all();

        return view('vehicles.index', compact('vehicles'));
    }
    /**
     * Remove Vehicle from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index');
    }

    /**
     * Delete all selected Vehicle at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Vehicle::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
