<?php

namespace App\Http\Controllers;

use App\MobileComputer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMobileComputersRequest;
use App\Http\Requests\UpdateMobileComputersRequest;

class MobileComputersController extends Controller
{
    public function index()
    {
        $mobile_computers = MobileComputer::all();

        return view('mobile_computers.index', compact('mobile_computers'));
    }

    public function create()
    {
        $relations = [
            'types' => \App\Type::get()->pluck('asst_type', 'id')->prepend('Please select', ''),
            
        ];

        
        return view('mobile_computers.create', $relations);
    }

    public function store(StoreMobileComputersRequest $request)
    {
        MobileComputer::create($request->all());

        return redirect()->route('mobile_computers.index');
    }

    public function show($id)
    {
        $relations = [
            'types' => \App\Type::get()->pluck('asst_type', 'id')->prepend('Please select', ''),
            
        ];

        $mobile_computer = MobileComputer::findOrFail($id);
        return view('mobile_computers.show',compact('mobile_computer') + $relations);
    }

    public function edit($id)
    {
        $relations = [
            'types' => \App\Type::get()->pluck('asst_type', 'id')->prepend('Please select', ''),
            
        ];

        
        $mobilecomputer = MobileComputer::findOrFail($id);
        return view('mobile_computers.edit',compact('mobilecomputer') + $relations);
    }

    public function update(UpdateMobileComputersRequest $request, $id)
    {
        $mobilecomputer = MobileComputer::findOrFail($id);
        $mobilecomputer->update($request->all());

        return redirect()->route('mobile_computers.index');
    }

    public function destroy($id)
    {
        $mobilecomputer = MobileComputer::findOrFail($id);
        $mobilecomputer->delete();

        return redirect()->route('mobile_computers.index');
    }
}
