<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoinKebaikan extends Model
{
    protected $table = 'poinKebaikan';

    protected $fillable = [
        'jenis', 'keterangan', 'siswa_id', 'tanggal', 'poin'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
