<?php

namespace App\Http\Controllers;

use App\ref_jawaban_soal;
use App\m_Soal;
use Illuminate\Http\Request;

class RefJawabanSoalController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ref_jawaban_soal::create([
            'soal_id' => $request->soal_id,
            'konten_soal_id' => 0,
            'jawaban' => implode('{{-- Batas JAWABAN --}}', $request->jawaban),
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        // return redirect('admin/soal/konten_soal/'.$request->soal_id.'');

        // dd([
        //     'soal_id' => $request->soal_id,
        //     'konten_soal_id' => 0,
        //     'jawaban' => implode('{{-- Batas JAWABAN --}}', $request->jawaban),
        //     'jawaban_benar' => $request->jawaban_benar,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ref_jawaban_soal  $ref_jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function show(ref_jawaban_soal $ref_jawaban_soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ref_jawaban_soal  $ref_jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function edit(ref_jawaban_soal $ref_jawaban_soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ref_jawaban_soal  $ref_jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ref_jawaban_soal $ref_jawaban_soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ref_jawaban_soal  $ref_jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(ref_jawaban_soal $ref_jawaban_soal)
    {
        //
    }
}
