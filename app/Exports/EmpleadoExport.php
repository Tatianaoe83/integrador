<?php

namespace App\Exports;

use App\empleado;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmpleadoExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Empleado::take(10)->get();
    }

}