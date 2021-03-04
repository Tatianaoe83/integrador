<?php

namespace App\Exports;

use App\Paciente;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class PacienteExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Paciente::take(10)->get();
    }

}