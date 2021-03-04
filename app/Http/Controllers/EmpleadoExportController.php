<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\EmpleadoExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class EmpleadoExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new EmpleadoExport(), 'empleado.xlsx');
    }
}