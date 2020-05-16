<?php

namespace App;
use App\Hafalan;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';

    protected $fillable = ['surat_id', 'ayat'];

    public function hafalan()
    {
        return $this->hasOne(Hafalan::class);
    }

}