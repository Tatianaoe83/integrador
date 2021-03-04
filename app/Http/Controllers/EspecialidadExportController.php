<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\EspecialidadExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EspecialidadExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new EspecialidadExport(), 'Especialidad.xlsx');
    }
}