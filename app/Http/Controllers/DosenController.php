<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dosen::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerDosen(Request $request)
    {
        $fields = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'kode_dosen' => 'required|unique:dosens',
            'password' => 'required',
        ]);
        $dosens = Dosen::create([
            'nama' => $fields['nama'],
            'nip' => $fields['nip'],
            'kode_dosen' => $fields['kode_dosen'],
            'password' => bcrypt($fields['password']),
        ]);

        $response = [
            'code' => 201,
            'message' => 'Akun berhasil dibuat',
            'data' => $dosens
        ];

        return response($response,200);

    }
    public function loginDosen( Request $request){
        $fields = $request->validate([
            'kode_dosen' => 'required|string',
            'password' => 'required|string',
        ]);
        $dosens = Dosen::where('kode_dosen', $fields['kode_dosen'])->first();
        if(!$dosens || !Hash::check($fields['password'], $dosens->password)){
            return response([
                'message' => 'Kode dosen atau Password Salah'
            ], 401);
        }
        $response = [
            'code' => 200,
            'message' => 'Login berhasil',
            'data' => $dosens
        ];

        return response($response, 200);
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
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        //
    }
}
