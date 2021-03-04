<?php

namespace App\Exports;

use App\Servicio;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServicioExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Servicio::take(10)->get();
    }

}