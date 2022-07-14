<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mahasiswa::all();
    }


    public function show($nim)
    {
        return Mahasiswa::find($nim);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerMahasiswa(Request $request)
    {
        $fields = $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'kode_dosen1' => 'required',
            'kode_dosen2' => 'nullable',
            'judul' => 'required',
            'password' => 'required',
        ]);
        $mahasiswas = Mahasiswa::create([
            'nama' => $fields['nama'],
            'nim' => $fields['nim'],
            'kode_dosen1' => $fields['kode_dosen1'],
            'kode_dosen2' => $fields['kode_dosen2'],
            'judul' => $fields['judul'],
            'password' => bcrypt($fields['password']),
        ]);

        $response = [
            'code' => 201,
            'message' => 'Akun berhasil dibuat',
            'data' => $mahasiswas
        ];

        return response($response,200);

        

    }
    public function loginMahasiswa(Request $request){
        $fields = $request->validate([
            'nim' => 'required|string',
            'password' => 'required|string',
        ]);
        $mahasiswas = Mahasiswa::where('nim', $fields['nim'])->first();
        if(!$mahasiswas || !Hash::check($fields['password'], $mahasiswas->password)){
            return response([
                'message' => 'NIM atau Password Salah'
            ], 401);
        }
        $response = [
            'code' => 200,
            'message' => 'Login berhasil',
            'data' => $mahasiswas
        ];
        return response($response,200);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
