<?php

namespace App\Exports;

use App\Models\Uwsgi;
use Maatwebsite\Excel\Concerns\FromCollection;

class UwsgiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Uwsgi::all();
    }
}
