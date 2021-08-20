<?php

namespace App\Exports;

use App\Models\Nginx;
use Maatwebsite\Excel\Concerns\FromCollection;

class NginxExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nginx::all();
    }
}
