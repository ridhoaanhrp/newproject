<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    protected $fillable = [
        'nama',
        'nim',
        'judul',
        'kode_dosen1',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

}
