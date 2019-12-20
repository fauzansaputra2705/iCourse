<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\m_Provinsi;
use App\m_Kabupaten;
use App\m_Kecamatan;
use App\m_Kelurahan;
use DataTables;
use DB;
use Illuminate\Http\Request;

class MKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {

        // $data = m_Kelurahan::all();
        $data = DB::table('m_kecamatan')
        ->join('m_kelurahan','m_kecamatan.id', '=', 'm_kelurahan.kecamatan_id')
        ->join('m_kabupaten','m_kecamatan.kabupaten_id', '=', 'm_kabupaten.id')
        ->join('m_provinsi','m_kabupaten.provinsi_id', '=', 'm_provinsi.id')
        ->select('m_kelurahan.*', 'm_kecamatan.nama_kecamatan' ,'m_kabupaten.nama_kabupaten', 'm_provinsi.nama_provinsi')
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

        ->addColumn('action', function($data){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
            ' <a onclick="edit('. $data->id .')" 
            class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a onclick="hapus('. $data->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['nama_provinsi','nama_kabupaten','nama_kecamatan','action'])
        ->make(true);
    }

    public function getKabupaten($id)
    {
       $kabupaten = DB::table("m_kabupaten")
       ->where("provinsi_id", $id)
       ->pluck("nama_kabupaten","id");
       return response()->json($kabupaten);
   }

   public function getKecamatan($id)
   {
        $kecamatan = DB::table("m_kecamatan")
        ->where("kabupaten_id", $id)
        ->pluck("nama_kecamatan", "id");
        return response()->json($kecamatan);
   }

   public function index()
   {
    $data['title'] = "iCoure | KELURAHAN";
    $data['pagecontent'] = "admin.wilayah.kelurahan.index";
    $data['provinsi'] = m_Provinsi::all();

    return view('layouts.app', $data);
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
        m_Kelurahan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Kelurahan  $m_Kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(m_Kelurahan $m_Kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Kelurahan  $m_Kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelurahan = m_Kelurahan::find($id);
        return $kelurahan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Kelurahan  $m_Kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelurahan = m_Kelurahan::find($id);
        $kelurahan->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Kelurahan  $m_Kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Kelurahan::destroy($id);
    }
}
