<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\ServicioExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ServicioExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new ServicioExport(), 'Servicio.xlsx');
    }
}
