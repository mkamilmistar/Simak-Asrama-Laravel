<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sholat extends Model
{
    protected $table = 'sholats';

    protected $fillable = [
        'siswa_id', 'tanggal', 'jenis_sholat', 'waktu_adzan', 'waktu_masuk', 'created_at', 'update_at' 
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}