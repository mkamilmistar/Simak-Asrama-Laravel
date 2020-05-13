<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class Hafalan extends Model
{
    protected $table = 'Hafalan';

    protected $fillable = ['tanggal', 'P/M', 'suratT','ayatT','suratM','ayatM','nilai','pembina_id','siswa_id'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

}