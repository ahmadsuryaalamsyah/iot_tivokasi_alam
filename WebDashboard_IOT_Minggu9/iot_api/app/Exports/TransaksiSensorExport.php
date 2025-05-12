<?php


namespace App\Exports;


use App\Models\TransaksiSensors;
use Maatwebsite\Excel\Concerns\FromCollection;


class TransaksiSensorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TransaksiSensors::all();
    }
}
