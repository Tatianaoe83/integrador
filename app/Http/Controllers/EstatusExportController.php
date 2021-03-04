<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\EstatusExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EstatusExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new EstatusExport(), 'Estatus.xlsx');
    }
}
