<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bimbing = DB::table('bimbingans')
            ->join('mahasiswas', 'bimbingans.nim', '=', 'mahasiswas.nim')
            ->join('dosens','bimbingan.kode_dosen','=', 'dosens.kode_dosen1')
            ->join('progress', 'bimbingan.id_progress', '=', 'progress.id')
            ->get();
        return $this->sendResponse($bimbing);
    }
    public function formBimbingan(Request $request){
        $fields = $request->validate([
            'tanggal_bimbingan' => 'required',
            'to_do_list' => 'required',
            'catatan' => 'nullable',
        ]);
        $bimbing = Bimbingans::create([
            'tanggal_bimbingan' => $fields['tanggal_bimbingan'],
            'to_do_list' => $fields['to_do_list'],
            'catatan' => $fields['catatan'],
        ]);

        $response = [
            'code' => 201,
            'message' => 'Bimbingan detail berhasil dibuat',
            'data' => $bimbing
        ];

        return response($response,200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Bimbingan  $bimbingan
     * @return \Illuminate\Http\Response
     */
    public function show(Bimbingan $bimbingan)
    {
        return Bimbingan::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bimbingan  $bimbingan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bimbingan $bimbingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bimbingan  $bimbingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimbingan $bimbingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bimbingan  $bimbingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bimbingan $bimbingan)
    {
        //
    }
}
