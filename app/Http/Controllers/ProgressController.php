<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function formProgress(){
        $fields = $request->validate([
            'abstrak' => 'required|numeric|digits_between:0,100',
            'bab_1' => 'required|numeric|digits_between:0,100',
            'bab_2' => 'required|numeric|digits_between:0,100',
            'bab_3' => 'required|numeric|digits_between:0,100',
            'daftar_pustaka' => 'required|numeric|digits_between:0,100',
        ]);
        $progresss = Progress::create([
            'abstrak' => $fields['abstrak'],
            'bab_1' => $fields['bab_1'],
            'bab_2' => $fields['bab_2'],
            'bab_3' => $fields['bab_3'],
            'daftar_pustaka' => $fields['daftar_pustaka'],
        ]);
        $response = [
            'code' => 201,
            'message' => 'Progress berhasil dibuat',
            'data' => $progresss
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
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        //
    }
}
