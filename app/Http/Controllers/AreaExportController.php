<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\AreaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AreaExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new AreaExport(), 'area.xlsx');
    }
}