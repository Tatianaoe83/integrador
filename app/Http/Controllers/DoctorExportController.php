<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\DoctorExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DoctorExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new DoctorExport(), 'Doctor.xlsx');
    }
}
