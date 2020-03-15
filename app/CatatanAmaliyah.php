<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanAmaliyah extends Model
{
    protected $table = 'catatanAmaliyah';

    protected $fillable = [
        'catatanAmalan_id',
        'jenis_amalan',
        'bobot_amalan',
        'keterangan'           
    ];
}
