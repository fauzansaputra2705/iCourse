<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\m_Kategori_Soal;
use App\m_Soal;
use App\ref_konten_soal;
use App\ref_jawaban_soal;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "iCourse | SISWA";
        $data['pagecontent'] = "siswa.index";
        return view('layouts.app', $data);
    }

    public function quiz()
    {
        $data['title'] = "iCourse | QUIZ";
        $data['pagecontent'] = "siswa.quiz";
        $data['kategori_soal'] = m_Kategori_Soal::all();
        // $data['soal_pilihan_ganda'] = m_Soal::where('jenis_soal', "Pilihan Ganda")->get();
        // $data['soal_essay'] = m_Soal::where('jenis_soal', "Essay")->get();
        $data['soalall'] = m_Soal::all();
        return view('layouts.app',$data); 
    }


    public function startquiz ($id)
    {
        $data['soal'] = m_Soal::find($id);
        $data['konten_soal'] = ref_konten_soal::where('soal_id',$id)->get();
        $data['jawaban'] = ref_jawaban_soal::where('soal_id',$id)->get();
        $data['jumlahsoal'] = ref_konten_soal::where('soal_id',$id)->count();
        $data['title'] =  "iCourse | UJIAN";
        $data['pagecontent'] = 'siswa.startquiz';

        
        return view('layouts.app',$data) ;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
