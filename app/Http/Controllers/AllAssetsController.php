<?php

namespace App\Http\Controllers;

use App\AllAsset;
use App\Personnel;
use App\Station;
use App\Grant;
use App\Vehicle;
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
//        dd($request);
//        $car = new Car([
//            'name' => $request->name,
//            'manufacturer_id' => $request->manufacturer != '' ? $request->manufacturer : null,  // fk column
//        ]);

        $all_assets->save();

//        $all_assets->grants()->attach(Input::get('grant_id'));
        $all_assets->grants()->detach();
        $all_assets->grants()->attach($request["grant_id"]);




//        ####Multi upload image
//        if (isset($request["file"][0])&&$request["file"][0]) {
//            $file=(json_decode($request["file"]));
//            foreach ($file as $val) {
//                if (file_exists(public_path()."/temp/" . $val) && $val !="")
//                    File::move(public_path()."/temp/" . $val, public_path()."/uploads/" . $val);
//                ModuleAlbum::create(["name" => $val,"Module_type_id"=>$Module_type_id, "Module_id" => $AllAsset->id]);
//            }
//        }
//
//        ######store
//
//
//        $all_assets = AllAsset::paginate(10);
//        return view("AllAssetView::AllAssetajax")->with(['Grant'=>$grant,'tab'=>1,'flag'=>3,'AllAsset'=>$all_assets]);
//            }else{
//        $all_assets = AllAsset::paginate(10);
//        return view("AllAssetView::AllAssetajax")->with(['Grant'=>$grant,'tab'=>1,'flag'=>6,'AllAsset'=>$all_assets]);
//        }

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


        return view('all_assets.show', compact('allasset')+$relations);

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
