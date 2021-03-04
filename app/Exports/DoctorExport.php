<?php

namespace App\Exports;

use App\Doctor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class DoctorExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Doctor::take(10)->get();
    }

}