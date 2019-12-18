<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\m_Kecamatan;
use App\m_Provinsi;
use App\m_Kabupaten;
use DataTables;
use Illuminate\Http\Request;

class MKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
        $data = m_Kecamatan::all();

        // $data = DB::table('m_provinsi')
        //             ->join('m_kabupaten','m_provinsi.id', '=', 'm_kabupaten.provinsi_id')
        //             ->select('m_provinsi.*', 'm_kabupaten.*')
        //             ->get();

        return DataTables::of($data)

        ->addColumn('nama_provinsi', function($data){
                // return $data->nama_provinsi;
        })

        ->addColumn('nama_kabupaten', function($data){
                // return $data->nama_provinsi;
        })

        ->addColumn('action', function($data){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
                     ' <a onclick="edit('. $data->id .')" 
                     class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                    . '<a onclick="hapus('. $data->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['nama_provinsi','nama_kabupaten','action'])
        ->make(true);
    }


    public function index()
    {
        $data['title'] = "iCourse | KECAMATAN";
        $data['pagecontent']= "admin.wilayah.kecamatan.index";
        $data['provinsi'] = m_Provinsi::all();
        $data['kabupaten'] = m_Kabupaten::all();
        return view ('layouts.app',$data);
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
        m_Kecamatan::create($request->all());

        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Kecamatan  $m_Kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(m_Kecamatan $m_Kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Kecamatan  $m_Kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = m_Kecamatan::find($id);
        return $kecamatan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Kecamatan  $m_Kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kecamatan = m_Kecamatan::find($id);

        $kecamatan->update($request->all());

        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Kecamatan  $m_Kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Kecamatan::destroy($id);

        return response()->json([
            "success" => true
        ]);
    }
}
