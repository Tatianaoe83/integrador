<?php

namespace App\Exports;


use App\Area;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class AreaExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        return Area::take(10)->get();
    }

}
