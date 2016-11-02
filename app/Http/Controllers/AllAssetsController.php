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
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('', ''),
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



        $all_assets = new AllAsset($request->all());

        $all_assets->save();

        $all_assets->grants()->attach(Input::get('grant_id'));

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
            'grants' => \App\Grant::get()->pluck('grant_name', 'id')->prepend('Please select', ''),
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


        $allasset->grants()->sync(Input::get('grant_id'));
        $allasset->update($request->all());


        return redirect()->route('all_assets.index');



    }

    /**
     * Display AllAsset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'stations' => \App\Station::get()->pluck('station_name', 'station_name')->prepend('Please select', ''),
            'grants' => \App\Grant::get()->pluck('grant_name', 'id'),
            'vehicles' => \App\Vehicle::get()->pluck('van', 'id')->prepend('Please select', ''),
            'personnels' => \App\Personnel::get()->pluck('personnel_id', 'id')->prepend('Please select', ''),
            'statuses' => \App\Status::get()->pluck('status', 'id')->prepend('Please select', ''),
            'vendors' => \App\Vendor::get()->pluck('vendor_name', 'id')->prepend('Please select', ''),
            'unittypes' => \App\UnitType::get()->pluck('name', 'id')->prepend('Please select', ''),

        ];

        $allasset = AllAsset::findOrFail($id);
//
//        dd($allasset);
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
