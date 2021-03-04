<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\PacienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PacienteExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new PacienteExport(), 'Paciente.xlsx');
    }
}
