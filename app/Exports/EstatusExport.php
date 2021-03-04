<?php

namespace App\Exports;

use App\Estatus;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class EstatusExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Estatus::take(10)->get();
    }

}