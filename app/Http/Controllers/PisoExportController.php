<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\PisoExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PisoExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new PisoExport(), 'Piso.xlsx');
    }
}
