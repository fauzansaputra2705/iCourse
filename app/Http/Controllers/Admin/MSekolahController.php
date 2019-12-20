<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\m_Sekolah;
use App\m_Provinsi;
use DataTables;
use DB;
use Illuminate\Http\Request;

class MSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {

        // $data = m_Sekolah::all();
        $data = DB::table('m_sekolah')
        ->join('m_kelurahan','m_sekolah.kelurahan_id', '=', 'm_kelurahan.id','left')
        ->join('m_kecamatan','m_sekolah.kecamatan_id', '=', 'm_kecamatan.id','left')
        ->join('m_kabupaten','m_sekolah.kabupaten_id', '=', 'm_kabupaten.id','left')
        ->join('m_provinsi','m_sekolah.provinsi_id', '=', 'm_provinsi.id','left')
        ->select('m_sekolah.*','m_kelurahan.nama_kelurahan', 'm_kecamatan.nama_kecamatan' ,'m_kabupaten.nama_kabupaten', 'm_provinsi.nama_provinsi')
        ->get();
        return DataTables::of($data)
        ->addColumn('nama_provinsi', function($data){
            return $data->nama_provinsi;
        })
        ->addColumn('nama_kabupaten', function($data){
            return $data->nama_kabupaten;
        })
        ->addColumn('nama_kecamatan', function($data)
        {
            return $data->nama_kecamatan;
        })
        ->addColumn('nama_kelurahan', function($data)
        {
            return $data->nama_kelurahan;
        })

        ->addColumn('action', function($data){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
            ' <a href="'. url("admin/sekolah/$data->id/edit") .'" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a href="'. url("admin/sekolah/$data->id") .'" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['nama_provinsi','nama_kabupaten','nama_kecamatan','nama_kelurahan','action'])
        ->make(true);
    }

    public function index()
    {
        $data['title'] = "iCourse | SEKOLAH";
        $data['pagecontent'] = "admin.sekolah.index";

        return view('layouts.app',$data);
    }


    public function getKabupaten($id)
    {
        $kabupaten = DB::table('m_kabupaten')
                     ->where('provinsi_id', $id)
                     ->pluck('nama_kabupaten','id');
        return response()->json($kabupaten);
    }

    public function getKecamatan($id)
    {
        $kecamatan = DB::table('m_kecamatan')
                     ->where('kabupaten_id', $id)
                     ->pluck('nama_kecamatan','id');
        return response()->json($kecamatan);
    }

    public function getKelurahan($id)
    {
        $kelurahan = DB::table('m_kelurahan')
                     ->where('kecamatan_id', $id)
                     ->pluck('nama_kelurahan','id');
        return response()->json($kelurahan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "iCourse | CREATE SEKOLAH";
        $data['pagecontent'] = "admin.sekolah.form";
        $data['provinsi'] = m_Provinsi::all();

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
        m_Sekolah::create($request->all());

        return redirect('admin/sekolah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Sekolah  $m_Sekolah
     * @return \Illuminate\Http\Response
     */
    // public function show(m_Sekolah $m_Sekolah)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Sekolah  $m_Sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "iCourse | EDIT SEKOLAH";
        $data['pagecontent'] = "admin.sekolah.form";
        $data['sekolah'] = m_Sekolah::find($id);

        return view('layouts.app',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Sekolah  $m_Sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sekolah = m_Sekolah::find($id);
        $sekolah->update($request->all());

        return redirect('admin/sekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Sekolah  $m_Sekolah
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     m_Sekolah::destroy($id);

    //     return redirect('admin/sekolah');
    // }

    public function show($id)
    {
        m_Sekolah::destroy($id);

        return redirect('admin/sekolah');
    }
}
