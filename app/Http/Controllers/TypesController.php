<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTypesRequest;
use App\Http\Requests\UpdateTypesRequest;

class TypesController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('types.index', compact('types'));
    }

    public function create()
    {
        
        return view('types.create');
    }

    public function store(StoreTypesRequest $request)
    {
        Type::create($request->all());

        return redirect()->route('types.index');
    }

    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('types.show',compact('type'));
    }

    public function edit($id)
    {
        
        $type = Type::findOrFail($id);
        return view('types.edit',compact('type'));
    }

    public function update(UpdateTypesRequest $request, $id)
    {
        $type = Type::findOrFail($id);
        $type->update($request->all());

        return redirect()->route('types.index');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('types.index');
    }
}
