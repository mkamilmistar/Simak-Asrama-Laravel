<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;
use App\Guru;

class HafalanDoaHadist extends Model
{
    protected $table = 'hafalanDoaHadist';

    protected $fillable = ['tanggal','pm','doa','hadist','nilai','pembina_id','siswa_id'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'pembina_id');      
    }
}