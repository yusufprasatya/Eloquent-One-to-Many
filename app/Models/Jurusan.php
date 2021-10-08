<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public function mahasiswas()
    {
        //Membuat relation hsip one to many yang mana Model jurusan ini bisa memiliki banyak data dari row mahasiswa
        return $this->hasMany('App\Models\Mahasiswa');
    }
}
