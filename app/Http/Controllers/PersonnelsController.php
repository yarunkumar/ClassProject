<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;
use App\Http\Requests\StorePersonnelsRequest;
use App\Http\Requests\UpdatePersonnelsRequest;

class PersonnelsController extends Controller
{

    /**
     * Display a listing of Personnel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();

        return view('personnels.index', compact('personnels'));
    }

    /**
     * Show the form for creating new Personnel.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('personnels.create', compact(''));
    }

    /**
     * Store a newly created Personnel in storage.
     *
     * @param  \App\Http\Requests\StorePersonnelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonnelsRequest $request)
    {
        Personnel::create($request->all());

        return redirect()->route('personnels.index');
    }

    /**
     * Show the form for editing Personnel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $personnel = Personnel::findOrFail($id);
        return view('personnels.edit', compact('personnel', ''));
    }

    /**
     * Update Personnel in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonnelsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonnelsRequest $request, $id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->update($request->all());

        return redirect()->route('personnels.index');
    }

    /**
     * Display Personnel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('personnels.show', compact('personnel'));
    }

    /**
     * Remove Personnel from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        return redirect()->route('personnels.index');
    }

}
