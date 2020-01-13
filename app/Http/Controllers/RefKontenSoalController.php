<?php

namespace App\Http\Controllers;

use App\ref_konten_soal;
use App\ref_jawaban_soal;
use App\m_Soal;
use DataTables;
use Illuminate\Http\Request;

class RefKontenSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function json($soal_id)
    {

        $kontensoal = ref_konten_soal::where('soal_id', $soal_id)->get();
        // $soalid = m_Soal::find($id);

        return DataTables::of($kontensoal)

        ->addColumn('kontensoal', function($kontensoal){
            return $kontensoal->konten_soal;
        })

        ->addColumn('action', function($kontensoal) {
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
            ' <a href="'. url('admin/soal/konten_soal/'.$kontensoal->soal_id.'/'.$kontensoal->id.'/edit') .'" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a onclick="hapus('. $kontensoal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['action', 'kontensoal'])
        ->make(true);
    }


    public function index($id)
    {
        $data['title'] = "iCourse | KONTEN SOAL";
        $data['soal'] = m_Soal::find($id);
        $data['pagecontent'] = "admin.soal.konten_soal";
        return view('layouts.app',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['title'] = "iCourse | BUAT SOAL";
        $data['soal'] = m_Soal::find($id);
        $soal = m_Soal::find($id);
        $data['jumlahsoal'] = ref_konten_soal::where('soal_id', $soal->id)->count();
        $data['pagecontent'] = "admin.soal.buat_soal";
        return view('layouts.app',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ref_konten_soal::create([
            "soal_id" => $request->soal_id,
            "no_soal" => $request->no_soal,
            "konten_soal" => $request->konten_soal,
        ]);

        $soal_id = $request->soal_id;
        $no_soal = $request->soal_id;
        $jawaban = $request->jawaban;
        $jawaban_benar = $request->jawaban_benar;

        if ($request->jenissoal == "Pilihan Ganda") {
            $this->storejawaban($soal_id,$no_soal,$jawaban,$jawaban_benar);
        }else {
            return redirect('admin/soal/konten_soal/'.$request->soal_id.'');
        }
    }

    public function storejawaban($soal_id,$no_soal,$jawaban,$jawaban_benar)
    {
        ref_jawaban_soal::create([
            'soal_id' => $soal_id,
            'no_soal' => $no_soal,
            'jawaban' => implode('{{-- Batas JAWABAN --}}', $jawaban),
            'jawaban_benar' => $jawaban_benar,
        ]);
        return redirect('admin/soal/konten_soal/'.$soal_id.'');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ref_konten_soal  $ref_konten_soal
     * @return \Illuminate\Http\Response
     */
    public function show(ref_konten_soal $ref_konten_soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ref_konten_soal  $ref_konten_soal
     * @return \Illuminate\Http\Response
     */
    public function edit($soal_id, $id)
    {

        $data['kontensoal'] = ref_konten_soal::where('id' ,$id)->where('soal_id', $soal_id)->first();

        $data['jawaban'] = ref_jawaban_soal::where('soal_id',$soal_id)->get();
        $soal = m_Soal::find($soal_id);
        $data['jumlahsoal'] = ref_konten_soal::where('soal_id', $soal->id)->count();

        $data['title'] = "iCourse | EDIT SOAL";
        $data['pagecontent'] = "admin.soal.edit_soal";

        return view('layouts.app',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ref_konten_soal  $ref_konten_soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $soal_id, $id)
    {
        $kontensoal = ref_konten_soal::where('id' ,$id)->where('soal_id', $soal_id)->first();
        $kontensoal->update([
            "soal_id" => $request->soal_id,
            "no_soal" => $request->no_soal,
            "konten_soal" => $request->konten_soal,
        ]);

        return redirect('admin/soal/konten_soal/'.$kontensoal->soal_id.'');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ref_konten_soal  $ref_konten_soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ref_konten_soal::destroy($id);

        return response()->json([
            "success" => true
        ]); 
    }
}
