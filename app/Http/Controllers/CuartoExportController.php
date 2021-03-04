<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\CuartoExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CuartoExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new CuartoExport(), 'Cuarto.xlsx');
    }
}
