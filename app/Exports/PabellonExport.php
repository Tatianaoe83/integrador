<?php

namespace App\Exports;

use App\Pabellon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class PabellonExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Pabellon::take(10)->get();
    }

}