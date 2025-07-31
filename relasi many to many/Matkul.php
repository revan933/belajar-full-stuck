<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
}