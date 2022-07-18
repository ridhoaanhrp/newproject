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
        return $this->belongsTo(Dosen::class);
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }

    public function progress(){
        return $this->hasMany(Progress::class);
    }
}
