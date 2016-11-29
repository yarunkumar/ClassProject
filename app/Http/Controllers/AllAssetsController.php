<?php

namespace App\Http\Controllers;

use App\AllAsset;
use App\Personnel;
use App\Station;
use App\Grant;
use App\Vehicle;
use App\AllAssethis;
use App\UnitType;
use App\Status;
use App\Vendor;
use App\Asset;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAllAssetsRequest;
use App\Http\Requests\UpdateAllAssetsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

//use Illuminate\Routing\Route;

class AllAssetsController extends Controller
{

    /**
     * Display a listing of AllAsset.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_assets = AllAsset::all();
        return view('all_assets.index', compact('all_assets'));


    }


    /**
     * Show the form for creating new AllAsset.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_number', 'id')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id'),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
            'personnels' => \App\Personnel::get()->pluck('personnel_id', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        return view('all_assets.create', $relations);


    }

    /**
     * Store a ne
     * @param  \App\Http\Requeswly created AllAsset in storage.
     *ts\StoreAllAssetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllAssetsRequest $request)
    {
//        dd($request);



//        $all_assets = new AllAsset($request->all());
        $all_assets = new AllAsset([
                'name'=> $request->name,
                'asset_type'=> $request->asset_type,
                'model'=> $request->model,
                'make'=> $request->make,
                'manu'=> $request->manu,
                'serial_number'=> $request->serial_number,
                'model_imei'=> $request->model_imei,
                'date_purchased'=> $request->date_purchased,
                'warranty_date'=> $request->warranty_date,
                'cost'=> $request->cost,
                'imei'=> $request->imei,
                'mobile_type'=> $request->mobile_type,
                'os'=> $request->os,
                'comments'=> $request->comments,
                'ntm_uid'=> $request->ntm_uid,
                'ntm_pass'=> $request->ntm_pass,
                'ip_address'=> $request->ip_address,
                'mac'=> $request->mac,
                'cad_ip'=> $request->cad_ip,
                'sim_id'=> $request->sim_id,
                'sim_phone'=> $request->sim_phone,
                'gps_protocol'=> $request->gps_protocol,
                'firmware_ver'=> $request->firmware_ver,
                'radio_id'=> $request->radio_id,
                'meid_model_num'=> $request->meid_model_num,
                'meid'=> $request->meid,
                'phone'=> $request->phone,
                'multi_tech_sim'=> $request->multi_tech_sim,
                'mdc_id'=> $request->mdc_id,
                'mdc_pass'=> $request->mdc_pass,
                'cpu'=> $request->cpu,
                'ram'=> $request->ram,
                'asset_tag'=> $request->asset_tag,
                'network_status'=> $request->network_status,
                'drop_status'=> $request->drop_status,
                'switch_serial'=> $request->switch_serial,
                'screen_size'=> $request->screen_size,
                'ac_adapter'=> $request->ac_adpater,
                'stylus'=> $request->stylus,
                'seid_num'=> $request->seid_num,
                'emid'=> $request->emid,
                'tmv_num'=> $request->tmv_num,
                'tmv_alias'=> $request->tmv_alias,
                'radio_desc'=> $request->radio_desc,
                'tier_level'=> $request->tier_level,
                'system_alias'=> $request->system_alias,
                'system_id'=> $request->system_id,

//                fk values checking if it passing empty values then setting it to null, otherwise fk constraint error.

                'grant_id'=> $request->grant_id != '' ? $request->grant_id : null,
                'status_id'=> $request->status_id != '' ? $request->status_id : null,
                'station_id'=>$request->station_id != '' ? $request->station_id : null,
                'vehicle_id'=>$request->vehicle_id != '' ? $request->vehicle_id : null,
                'personnel_id'=>$request->personnel_id != '' ? $request->personnel_id : null,
                'vendor_id'=>$request->vendor_id != '' ? $request->vendor_id : null,
            ]

        );


        $all_assets->save();

        $all_assets->grants()->detach();
        $all_assets->grants()->attach($request["grant_id"]);




        return redirect()->route('all_assets.index');

    }

    /**
     * Show the form for editing AllAsset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'id')->prepend('Please select', ''),

            'grants' => \App\Grant::get()->pluck('grant_name', 'id'),
            'grantsSet' => DB::table('asset_grant')
                ->leftJoin('grants', 'grant_id', '=', 'grants.id')
                ->where('all_asset_id',$id)->pluck('grant_id')->toArray(),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
            'personnels' => \App\Personnel::get()->pluck('personnel_id', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),

        ];
        $all_assets = AllAsset::findOrFail($id);
        return view('all_assets.edit', compact('all_assets', '') + $relations);

    }

    /**
     * Update AllAsset in storage.
     *
     * @param  \App\Http\Requests\UpdateAllAssetsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllAssetsRequest $request, $id)
    {
//        dd($request);
        $allasset = AllAsset::findOrFail($id);

        //asset history code begin
        //history code

        $stationid=$allasset->station_id;
       $statusid=$allasset->status_id;
      // $grantid=$allasset->grant_id;
       $unittypeid=$allasset->unittype_id;
       $vendorid=$allasset->vendor_id;
       $vehicleid=$allasset->vehicle_id;


       
       //finding relavent names against each primary key and storing it in variables
       $station = Station::find($stationid);
       $status = Status::find($statusid);
       $unit = Unittype::find($unittypeid);
       $vendor = Vendor::find($vendorid);
       $vehicle = Vehicle::find($vehicleid);
       $grants = DB::table('asset_grant')
                ->leftJoin('grants', 'grant_id', '=', 'grants.id')
                ->where('all_asset_id',$id)->pluck('grant_name');
       //dd($grants);

       //if else code to handle null values

      if($grants)
      {
      $grant_name=$grants;
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
       if($vehicle)
       {
        $vehicle_name=$vehicle->van;
      
       }

       else
       {
        $vehicle_name=null;
       }
//dd($allasset);
       \DB::table('all_assethis')->insert(
            ['asset_id' => $allasset->id, 'name' => $allasset->name, 'asset_type' => $allasset->asset_type,'model' => $allasset->model, 'make' => $allasset->make, 'manu' => $allasset->manu, 'serial_number' => $allasset->serial_number, 'model_imei' => $allasset->model_imei, 'date_purchased' => $allasset->date_purchased, 'warranty_date' => $allasset->warranty_date, 'cost' => $allasset->cost, 'imei' => $allasset->imei, 'mobile_type' => $allasset->mobile_type, 'os' => $allasset->os, 'comments' => $allasset->comments, 'ntm_uid' => $allasset->ntm_uid, 'ntm_pass' => $allasset->ntm_pass, 'ip_address' => $allasset->ip_address, 'mac' => $allasset->mac, 'cad_ip' => $allasset->cad_ip, 'sim_id' => $allasset->sim_id, 'sim_phone' => $allasset->sim_phone,   'gps_protocol' => $allasset->gps_protocol, 'firmware_ver' => $allasset->firmware_ver, 'radio_id' => $allasset->radio_id, 'meid_model_num' => $allasset->meid_model_num, 'meid' => $allasset->meid, 'phone' => $allasset->phone,   'multi_tech_sim' => $allasset->multi_tech_sim, 'mdc_id' => $allasset->mdc_id, 'mdc_pass' => $allasset->mdc_pass, 'cpu' => $allasset->cpu,   'ram' => $allasset->ram,   'asset_tag' => $allasset->asset_tag,   'network_status' => $allasset->network_status, 'drop_status' => $allasset->drop_status,   'switch_serial' => $allasset->switch_serial,   'screen_size' => $allasset->screen_size,   'ac_adapter' => $allasset->ac_adpater, 'stylus' => $allasset->stylus, 'seid_num' => $allasset->seid_num, 'emid' => $allasset->emid, 'tmv_num' => $allasset->tmv_num,   'tmv_alias' => $allasset->tmv_alias,   'radio_desc' => $allasset->radio_desc, 'tier_level' => $allasset->tier_level, 'system_alias' => $allasset->system_alias, 'system_id' => $allasset->system_id, 'status_id' => $allasset->status_id, 'status' => $status_name,  'station_id' => $allasset->station_id,  'station_name' => $station_name, 'vehicle_id' => $allasset->vehicle_id, 'vehicle_name' => $vehicle_name, 'vendor_id' => $allasset->vendor_id, 'vendor_name' => $vendor_name, 'grant_name' => $grant_name, "created_at" =>  \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now() ] 
        );
       

       //history code end
       //history code end

//        $allasset->grants()->sync(Input::get('grant_id'));
//        in above case, it was giving error because sync method expects an array

        $allasset->grants()->sync( (array) Input::get('grant_id'));

        $allasset ->update([
                'name'=> $request->name,
                'asset_type'=> $request->asset_type,
                'model'=> $request->model,
                'make'=> $request->make,
                'manu'=> $request->manu,
                'serial_number'=> $request->serial_number,
                'model_imei'=> $request->model_imei,
                'date_purchased'=> $request->date_purchased,
                'warranty_date'=> $request->warranty_date,
                'cost'=> $request->cost,
                'imei'=> $request->imei,
                'mobile_type'=> $request->mobile_type,
                'os'=> $request->os,
                'comments'=> $request->comments,
                'ntm_uid'=> $request->ntm_uid,
                'ntm_pass'=> $request->ntm_pass,
                'ip_address'=> $request->ip_address,
                'mac'=> $request->mac,
                'cad_ip'=> $request->cad_ip,
                'sim_id'=> $request->sim_id,
                'sim_phone'=> $request->sim_phone,
                'gps_protocol'=> $request->gps_protocol,
                'firmware_ver'=> $request->firmware_ver,
                'radio_id'=> $request->radio_id,
                'meid_model_num'=> $request->meid_model_num,
                'meid'=> $request->meid,
                'phone'=> $request->phone,
                'multi_tech_sim'=> $request->multi_tech_sim,
                'mdc_id'=> $request->mdc_id,
                'mdc_pass'=> $request->mdc_pass,
                'cpu'=> $request->cpu,
                'ram'=> $request->ram,
                'asset_tag'=> $request->asset_tag,
                'network_status'=> $request->network_status,
                'drop_status'=> $request->drop_status,
                'switch_serial'=> $request->switch_serial,
                'screen_size'=> $request->screen_size,
                'ac_adapter'=> $request->ac_adpater,
                'stylus'=> $request->stylus,
                'seid_num'=> $request->seid_num,
                'emid'=> $request->emid,
                'tmv_num'=> $request->tmv_num,
                'tmv_alias'=> $request->tmv_alias,
                'radio_desc'=> $request->radio_desc,
                'tier_level'=> $request->tier_level,
                'system_alias'=> $request->system_alias,
                'system_id'=> $request->system_id,

//                fk values checking if it passing empty values then setting it to null, otherwise fk constraint error.

                'status_id'=> $request->status_id != '' ? $request->status_id : null,
                'station_id'=>$request->station_id != '' ? $request->station_id : null,
                'vehicle_id'=>$request->vehicle_id != '' ? $request->vehicle_id : null,
                'personnel_id'=>$request->personnel_id != '' ? $request->personnel_id : null,
                'vendor_id'=>$request->vendor_id != '' ? $request->vendor_id : null,
            ]

        );


        return redirect()->route('all_assets.index');



    }

    /**
     * Display AllAsset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'station_name')->prepend('Please select', ''),
            'grants' => DB::table('asset_grant')
                ->leftJoin('grants', 'grant_id', '=', 'grants.id')
                ->where('all_asset_id',$id)->pluck('grant_name'),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
            'personnels' => \App\Personnel::get()->pluck('personnel_id', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),

        ];


        $allasset = AllAsset::findOrFail($id);
//below one line code is for storing all history related to the $id in variable, which is to be used to display in show page.
        $allassethis2 = AllAssethis::where('asset_id', $id)->get();

        return view('all_assets.show', compact('allasset', 'allassethis2')+$relations);

    }

    /**
     * Remove AllAsset from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allasset = AllAsset::findOrFail($id);
        $allasset->grants()->detach(Input::get('grant_id'));
        $allasset->delete();

        return redirect()->route('all_assets.index');
    }


    /**
     * Counting all assets and for the stats
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    public function count()
//    {
//
//        $all_assets = AllAsset::all();
//        return DB::table('all_assets')
//            ->where('id',$this->id)
//            ->count();
////        return view('all_assets.index', compact('all_assets'));
//
//
//    }

    /**
     * Delete all selected AllAsset at once.
     *
     * @param Request $request
     */
//    public function massDestroy(Request $request)
//    {
//        if ($request->input('ids')) {
//            $entries = AllAsset::whereIn('id', $request->input('ids'))->get();
//
//            foreach ($entries as $entry) {
//                $entry->delete();
//            }
//        }
//    }
}
