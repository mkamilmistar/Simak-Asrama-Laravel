<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanKebaikan extends Model
{
    protected $table = 'catatanKebaikan';

    protected $fillable = [
        'jenis', 'kegiatan', 'keterangan', 'user_id', 'created_at'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
