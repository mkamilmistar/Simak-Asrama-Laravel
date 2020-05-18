<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JenisAmalanYaumiyah;

class CatatanAmaliyah extends Model
{
    protected $table = 'catatanAmaliyah';

    protected $fillable = [
        'jenisAmalan_id',
        'user_id',
        'keterangan',
        'tanggal',
        'totalPoin'
    ];

    public function jenisAmalanYaumiyah()
    {
        return $this->belongsTo(JenisAmalanYaumiyah::class, 'jenisAmalan_id');
        
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withPivot(['jumlah', 'totalPoin', 'keterangan']);
    }
}