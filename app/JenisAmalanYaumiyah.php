<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisAmalanYaumiyah extends Model
{
    protected $table = 'jenisAmalanYaumiyah';
    protected $fillable = [
        'jenisAmalan', 'bobotAmalan', 'keterangan',
    ];
}
