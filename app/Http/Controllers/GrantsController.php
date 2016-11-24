<?php

namespace App\Http\Controllers;

use App\Grant;
use App\AllAsset;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrantsRequest;
use App\Http\Requests\UpdateGrantsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;


class GrantsController extends Controller
{

    use FileUploadTrait;

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
//        if($request->hasFile('related_file') ){
//
//        }

        $request = $this->saveFiles($request);

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

    /**
     * Export import excel.
     *
     * @param download $type
     */

    public function importExport()
    {
        return view('importExport');
    }
    public function downloadExcel($type)
    {
        $data = Grant::get()->toArray();
        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    //Need to revisit import function, as of now, it is not importing

    public function importExcel()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = [   'Grant Name' => $value->grant_name,
                                    'Date Issued' => $value->description,
                                    'grant_type' => $value->grant_type,
                                    'date_matures' => $value->date_matures,
                                    'grant_value' => $value->grant_value,
                                    'grant_comments' => $value->grant_comments,
                    ];
                }
                if(!empty($insert)){
                    DB::table('items')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
        }
        return back();
    }
}
