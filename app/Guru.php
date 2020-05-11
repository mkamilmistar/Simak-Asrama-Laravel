<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'NIP', 'role', 'alamat', 'noHP'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
