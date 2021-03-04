<?php

namespace App\Exports;

use App\hospital;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class HospitalExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Hospital::take(10)->get();
    }

}