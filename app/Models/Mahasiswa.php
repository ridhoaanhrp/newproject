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
        'kode_dosen2',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function dosen(){
        return $this->belongsToMany(Dosen::class, 'mahasiswas');
    }
    public function bimbingan(){
        return $this->hasMany(Bimbingans::class,'bimbingans');
    }

}
