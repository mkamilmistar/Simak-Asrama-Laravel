<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\catatanHarian;
use App\User;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_depan', 'NIS', 'user_id', 'gedung_asrama', 'kamar_id', 'kelas', 'poinAmaliyah'
    ];
    
    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function poinKebaikan(){
        return $this->hasMany(PoinKebaikan::class);
    }

    public function getJumlahTotalPoinAttribute(){
        $tmp = $this->poinKebaikan;
        return $tmp->where('jenis', 'kebaikan')->sum('poin') - $tmp->where('jenis', 'keburukan')->sum('poin');
    }
    
}