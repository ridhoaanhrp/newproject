<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class RequestController extends Controller
{
    public function showCode(){
        return Dosen::all('kode_dosen');
    }
}
