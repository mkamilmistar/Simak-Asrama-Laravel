<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'NIP', 'nama', 'guru_id', 'alamat', 'noHP'
    ];
    
    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }
}
