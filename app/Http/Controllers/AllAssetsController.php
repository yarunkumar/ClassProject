<?php

namespace App\Http\Controllers;

use App\AllAsset;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAllAssetsRequest;
use App\Http\Requests\UpdateAllAssetsRequest;

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
        
        return view('all_assets.create', compact(''));
    }

    /**
     * Store a newly created AllAsset in storage.
     *
     * @param  \App\Http\Requests\StoreAllAssetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllAssetsRequest $request)
    {
        AllAsset::create($request->all());

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
        
        $allasset = AllAsset::findOrFail($id);
        return view('all_assets.edit', compact('allasset', ''));
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
        $allasset = AllAsset::findOrFail($id);
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
        $allasset = AllAsset::findOrFail($id);
        return view('all_assets.show', compact('allasset'));
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
