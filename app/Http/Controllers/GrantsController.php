<?php

namespace App\Http\Controllers;

use App\Grant;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrantsRequest;
use App\Http\Requests\UpdateGrantsRequest;

class GrantsController extends Controller
{

    /**
     * Display a listing of Grant.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grants = Grant::all();

        return view('grants.index', compact('grants'));
    }

    /**
     * Show the form for creating new Grant.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('grants.create', compact(''));
    }

    /**
     * Store a newly created Grant in storage.
     *
     * @param  \App\Http\Requests\StoreGrantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrantsRequest $request)
    {
        Grant::create($request->all());

        return redirect()->route('grants.index');
    }

    /**
     * Show the form for editing Grant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $grant = Grant::findOrFail($id);
        return view('grants.edit', compact('grant', ''));
    }

    /**
     * Update Grant in storage.
     *
     * @param  \App\Http\Requests\UpdateGrantsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrantsRequest $request, $id)
    {
        $grant = Grant::findOrFail($id);
        $grant->update($request->all());

        return redirect()->route('grants.index');
    }

    /**
     * Display Grant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grant = Grant::findOrFail($id);
        return view('grants.show', compact('grant'));
    }

    /**
     * Remove Grant from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grant = Grant::findOrFail($id);
        $grant->delete();

        return redirect()->route('grants.index');
    }

    /**
     * Delete all selected Grant at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Grant::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
