<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanAmaliyah extends Model
{
    protected $table = 'catatanAmaliyah';

    protected $fillable = [
        'jenisAmalan_id',
        'user_id',
        'keterangan',
        'tanggal',
        'totalPoin'
    ];
}
