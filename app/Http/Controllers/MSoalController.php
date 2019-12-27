<?php

namespace App\Http\Controllers;

use App\m_Soal;
use App\m_Kategori_Soal;
use DataTables;
use DB;
use Illuminate\Http\Request;

class MSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function json()
    {
        $soal = DB::table('m_soal')
        ->join('m_kategori_soal', 'm_kategori_soal.id', '=', 'm_soal.kategori_soal_id')
        ->select('m_soal.*', 'm_kategori_soal.kategori_soal')
        ->get();

        return DataTables::of($soal)

        ->addColumn('action', function($soal){
            return  
            ' <a onclick="edit('. $soal->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a onclick="hapus('. $soal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> '
            . '<a href="'. url('admin/soal/buat_soal/'.$soal->id.'') .'" class="btn btn-primary btn-xs text-white">Buat Soal</a> '
            . '<a href="'. url('admin/soal/edit_soal/'.$soal->id.'') .'" class="btn btn-primary btn-xs text-white">Edit Soal</a> '
            . '<a href="'. url('admin/soal/view_soal/'. $soal->id .'') .'" class="btn btn-success btn-xs text-white">View Soal</a> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }



    public function index()
    {
        $data['title'] = "iCourse | SOAL";
        $data['pagecontent'] = "admin.soal.data_soal";
        $data['kategorisoal'] = m_Kategori_Soal::all();

        return view('layouts.app',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'kategori_soal_id' => $request->kategori_soal_id,
            'konten_soal' => NULL,
            'jenis_soal' => $request->jenis_soal,
            'tag_materi' => $request->tag_materi,
        ];
        m_Soal::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Soal  $m_Soal
     * @return \Illuminate\Http\Response
     */
    public function show(m_Soal $m_Soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Soal  $m_Soal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = m_Soal::find($id);
        return $soal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Soal  $m_Soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $soal = m_Soal::find($id);
        $input = [
            'kategori_soal_id' => $request->kategori_soal,
            'konten_soal' => NULL,
            'jenis_soal' => $request->jenis_soal,
            'tag_materi' => $request->tag_materi,
        ];
        $soal->update($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Soal  $m_Soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Soal::destroy($id);

        return response()->json([
            'success' => true
        ]);
    }

    public function buat_soal($id)
    {
        $data['title'] = "iCourse | BUAT SOAL";
        $data['soal'] = m_Soal::find($id);
        $data['pagecontent'] = "admin.soal.buat_soal";
        return view('layouts.app',$data);
    }

    public function create_soal(Request $request, $id)
    {
        $soal = m_Soal::find($id);

        $soal->update([
            'konten_soal' => $request->konten_soal,
        ]);

        return redirect('admin/soal');
    }
}
