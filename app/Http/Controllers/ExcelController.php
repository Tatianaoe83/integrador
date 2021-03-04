<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Area;
use Excel;



class ExcelController extends Controller
{
    public function exportArea()
    {
    Excel::create('area', function($excel) {

    $area = area::all();

    $excel->sheet('area', function($sheet) use($area) {

    $sheet->fromArray($area);

});

})->export('xlsx');
    }

}
