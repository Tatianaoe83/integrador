<?php

namespace App\Exports;

use App\cuarto;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class CuartoExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Cuarto::take(10)->get();
    }

}