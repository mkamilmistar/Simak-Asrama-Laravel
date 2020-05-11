<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\catatanHarian;
use App\User;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_depan', 'NIS', 'user_id', 'gedung_asrama', 'kamar_id', 'kelas'
    ];
    
    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
