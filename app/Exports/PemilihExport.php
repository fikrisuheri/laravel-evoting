<?php

namespace App\Exports;

use App\Pemilih;
use Maatwebsite\Excel\Concerns\FromCollection;

class PemilihExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pemilih::all();
    }
}
