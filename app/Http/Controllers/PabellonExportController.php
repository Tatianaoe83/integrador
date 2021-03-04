<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\PabellonExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PabellonExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new PabellonExport(), 'Pabellon.xlsx');
    }
}