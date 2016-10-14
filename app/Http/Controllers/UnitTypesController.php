<?php

namespace App\Http\Controllers;

use App\UnitType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUnitTypesRequest;
use App\Http\Requests\UpdateUnitTypesRequest;

class UnitTypesController extends Controller
{

    /**
     * Display a listing of UnitType.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_types = UnitType::all();

        return view('unit_types.index', compact('unit_types'));
    }

    /**
     * Show the form for creating new UnitType.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('unit_types.create', compact(''));
    }

    /**
     * Store a newly created UnitType in storage.
     *
     * @param  \App\Http\Requests\StoreUnitTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitTypesRequest $request)
    {
        UnitType::create($request->all());

        return redirect()->route('unit_types.index');
    }

    /**
     * Show the form for editing UnitType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $unittype = UnitType::findOrFail($id);
        return view('unit_types.edit', compact('unittype', ''));
    }

    /**
     * Update UnitType in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitTypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnitTypesRequest $request, $id)
    {
        $unittype = UnitType::findOrFail($id);
        $unittype->update($request->all());

        return redirect()->route('unit_types.index');
    }

    /**
     * Display UnitType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unittype = UnitType::findOrFail($id);
        return view('unit_types.show', compact('unittype'));
    }

    /**
     * Remove UnitType from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unittype = UnitType::findOrFail($id);
        $unittype->delete();

        return redirect()->route('unit_types.index');
    }

}
