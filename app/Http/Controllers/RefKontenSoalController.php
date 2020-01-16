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
        $jawaban = ref_jawaban_soal::where('soal_id',$soal_id)->get();

        return DataTables::of($kontensoal)

        ->addColumn('kontensoal', function($kontensoal){
            return $kontensoal->konten_soal;
        })

        ->addColumn('jawaban', function($kontensoal) use ($jawaban){
            foreach ($jawaban as $jb) {
                $jawab= explode('{{-- Batas JAWABAN --}}', $jb->jawaban);

                if ($jb->konten_soal_id == $kontensoal->id && $jb->no_soal == $kontensoal->no_soal) {
                    return "a. ".$jawab[0]."<br>"."b. ".$jawab[1]."<br>"."c. ".$jawab[2]."<br>"."d. ".$jawab[3]."<br>";   
                }
            }
        })

        ->addColumn('jawaban_benar', function($kontensoal) use ($jawaban){
            foreach ($jawaban as $jb) {
                if ($jb->konten_soal_id == $kontensoal->id && $jb->no_soal == $kontensoal->no_soal) {
                    return $jb->jawaban_benar;
                }
            }
        })

        ->addColumn('action', function($kontensoal) {
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
            ' <a href="'. url('admin/soal/konten_soal/'.$kontensoal->soal_id.'/'.$kontensoal->id.'/edit') .'" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a onclick="hapus('. $kontensoal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['action', 'kontensoal', 'jawaban', 'jawaban_benar'])
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
        $no_soal = $request->no_soal;
        $jawaban = $request->jawaban;
        $jawaban_benar = $request->jawaban_benar;

        if ($request->jenissoal == "Pilihan Ganda") {

            return $this->storejawaban($soal_id,$no_soal,$jawaban,$jawaban_benar);

        }else {
            return redirect('admin/soal/konten_soal/'.$request->soal_id.'');
        }
    }

    public function storejawaban($soal_id,$no_soal,$jawaban,$jawaban_benar)
    {
        $id_konten_soal =ref_konten_soal::where('soal_id', $soal_id)->where('no_soal', $no_soal)->first();

        ref_jawaban_soal::create([
            'soal_id' => $soal_id,
            'konten_soal_id' => $id_konten_soal->id,
            'no_soal' => $no_soal,
            'jawaban' => implode('{{-- Batas JAWABAN --}}', $jawaban),
            'jawaban_benar' => $jawaban_benar,
        ]);

        return redirect('admin/soal/konten_soal/'.$soal_id.'');
    }


    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Upload Gambar Sukses'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
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
        $data['soal'] = m_Soal::find($soal_id);


        $soal = m_Soal::find($soal_id);
        if ($soal->jenis_soal == "Pilihan Ganda") {

            $data['jawaban'] = ref_jawaban_soal::where('soal_id',$soal_id)->where('konten_soal_id', $id)->first();
            $jawaban = ref_jawaban_soal::where('soal_id',$soal_id)->where('konten_soal_id', $id)->first();

            $data['jawab'] = explode('{{-- Batas JAWABAN --}}', $jawaban->jawaban);

        }

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

        $soal_id = $request->soal_id;
        $konten_soal_id = $request->konten_soal_id;
        $no_soal = $request->no_soal;
        $jawaban = $request->jawaban;
        $jawaban_benar = $request->jawaban_benar;

        if ($request->jenissoal == "Pilihan Ganda") {
            return $this->updatejawaban($soal_id,$konten_soal_id,$no_soal,$jawaban,$jawaban_benar);
        }else{
            return redirect('admin/soal/konten_soal/'.$kontensoal->soal_id.'');
        }
    }

    public function updatejawaban($soal_id,$konten_soal_id,$no_soal,$jawaban,$jawaban_benar)
    {
        $jawabansoal = ref_jawaban_soal::where('soal_id',$soal_id)->where('no_soal',$no_soal)->where('konten_soal_id',$konten_soal_id)->first();

        $jawabansoal->soal_id = $soal_id;
        $jawabansoal->konten_soal_id = $konten_soal_id;
        $jawabansoal->no_soal = $no_soal;
        $jawabansoal->jawaban = implode('{{-- Batas JAWABAN --}}', $jawaban);
        $jawabansoal->jawaban_benar = $jawaban_benar;

        $jawabansoal->save();

        return redirect('admin/soal/konten_soal/'.$soal_id.'');
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

    public function destroyjawaban($id)
    {
        ref_jawaban_soal::destroy($id);

        return response()->json([
            "success" => true
        ]); 
    }
}
