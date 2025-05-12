<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiSensors extends Model
{
    protected $table = 'transaksi_sensors';

    protected $fillable = [
        'nama_sensor',
        'nilai1',
        'nilai2',
    ];

}
