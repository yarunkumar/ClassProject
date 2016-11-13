<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVendorsRequest;
use App\Http\Requests\UpdateVendorsRequest;

class VendorsController extends Controller
{

    /**
     * Display a listing of Vendor.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();

        return view('vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating new Vendor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('vendors.create', compact(''));
    }

    /**
     * Store a newly created Vendor in storage.
     *
     * @param  \App\Http\Requests\StoreVendorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorsRequest $request)
    {
        Vendor::create($request->all());

        return redirect()->route('vendors.index');
    }

    /**
     * Show the form for editing Vendor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $vendor = Vendor::findOrFail($id);
        return view('vendors.edit', compact('vendor', ''));
    }

    /**
     * Update Vendor in storage.
     *
     * @param  \App\Http\Requests\UpdateVendorsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorsRequest $request, $id)
    {

        $vendor = Vendor::findOrFail($id);
        $vendor->update($request->all());

        return redirect()->route('vendors.index');
    }

    /**
     * Display Vendor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('vendors.show', compact('vendor'));
    }

    /**
 * Remove Vendor from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        return redirect()->route('vendors.index');
    }

    /**
     * Delete all selected Vendor at once.
     *
     * @param Request $request
     */

    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Vendor::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
