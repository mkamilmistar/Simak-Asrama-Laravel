<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CatatanAmaliyah;

class JenisAmalanYaumiyah extends Model
{
    protected $table = 'jenisAmalanYaumiyah';
    protected $fillable = [
        'jenisAmalan', 'bobotAmalan', 'keterangan',
    ];

    public function catatanAmaliyah()
    {
        return $this->belongsTo(CatatanAmaliyah::class);
    }
}