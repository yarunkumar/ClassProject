<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use Input;
use App\Grant;

class ExcelController extends Controller
{
    public function getImport(){
        return view('excel.importGrant');

    }

    public function postImport(){

        Excel::load(Input::file('grant'),function($reader){
            $reader->each(function($sheet){
                Grant::firstOrCreate($sheet->toArray());
            });
        });

    }

    public function getExport(){

        $grant=Grant::all();
        Excel::create('Export Data', function($excel) use($grant){
            $excel->sheet('Sheet 1', function($sheet) use($grant){
                $sheet->fromArray($grant);
            });
        })->export('xlsx');
    }


}
