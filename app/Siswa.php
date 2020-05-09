<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\catatanHarian;
use App\User;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'NIS', 'role', 'siswa_id', 'gedung_asrama', 'kamar_id'
    ];
    
    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
