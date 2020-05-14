<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class Hafalan extends Model
{
    protected $table = 'hafalan';

    protected $fillable = ['tanggal', 'pm','tm','surat','ayat0','ayat1','nilai','pembina_id','siswa_id'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function namaSurat()
    {
        return $this->belongsTo(Surat::class, 'surat');      
    }

}