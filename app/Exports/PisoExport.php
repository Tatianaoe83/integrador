<?php

namespace App\Exports;

use App\piso;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class PisoExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Piso::take(10)->get();
    }

}