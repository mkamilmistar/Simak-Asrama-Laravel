<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Siswa;
use App\Guru;
use App\CatatanKebaikan;
use App\JenisAmalanYaumiyah;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'username', 'jenis_kelamin', 'role', 'tempat_lahir', 'alamat', 'user_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatar()
    {
        if($this->avatar){
            return asset('images/default.jpg');
        }

        return asset('images/user/'.$this->user_image);
    }

    public function siswa(){
        return $this->hasOne(Siswa::class, 'user_id');
    }

    public function guru(){
        return $this->hasOne(Guru::class, 'user_id');
    }


    public function CatatanKebaikan(){
        return $this->hasMany(CatatanKebaikan::class);
    }

    public function catatanHarian(){
        return $this->hasMany(CatatanHarian::class);
    }

    public function catatanAmaliyah()
    {
        return $this->belongsTo(JenisAmalanYaumiyah::class)->withPivot(['jumlah', 'totalPoin', 'keterangan']);
    }


}