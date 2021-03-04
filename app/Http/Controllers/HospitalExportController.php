<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\HospitalExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HospitalExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new HospitalExport(), 'Hospital.xlsx');
    }
}