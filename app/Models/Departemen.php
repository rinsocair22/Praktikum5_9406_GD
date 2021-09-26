<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = 'data_ddepartemen';
    protected $fillable = [
        "nama_departemen",
        'nama_manager',
        'jumlah_pegawai'
    ];
}
