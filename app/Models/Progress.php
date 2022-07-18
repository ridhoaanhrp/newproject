<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progress';

    protected $fillable = [
        'abstrak',
        'bab_1',
        'bab_2',
        'bab_3',
        'daftar_pustaka',
    ];
    
    public function bimbingan(){
        return $this->belongsTo(Bimbingan::class);
    }
    
}
