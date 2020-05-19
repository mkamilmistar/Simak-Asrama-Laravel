<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sholat extends Model
{
    protected $table = 'sholats';

    protected $fillable = [
        'siswa_id', 'tanggal', 'jenis_sholat', 'created_at', 'update_at', 'waktu_adzan2', 'waktu_sholat2' 
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}

//'waktu_adzan', 'waktu_masuk',