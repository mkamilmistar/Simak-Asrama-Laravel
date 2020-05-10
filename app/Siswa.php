<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_depan', 'NIS', 'user_id', 'gedung_asrama', 'kamar_id'
    ];
    
    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }
}
