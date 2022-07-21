<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'bimbingans';

    protected $fillable = [
        'tanggal_bimbingan',
        'to_do_list',
        'catatan',
    ]; 

    public function dosen(){
        return $this->belongsTo('App\Models\Dosen','kode_dosen');
    }

    public function mahasiswa(){
        return $this->belongsTo('App\Models\Mahasiswa','nim');
    }

    public function progress(){
        return $this->hasMany('App\Models\Ptogress','id');
    }
}
