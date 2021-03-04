<?php

namespace App\Exports;

use App\Especialidad;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class EspecialidadExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Especialidad::take(10)->get();
    }

}