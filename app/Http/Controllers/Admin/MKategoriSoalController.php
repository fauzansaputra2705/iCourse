<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\m_Kategori_Soal;
use DataTables;
use Illuminate\Http\Request;

class MKategoriSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
        $kategori_soal = m_Kategori_Soal::all();

        return DataTables::of($kategori_soal)
        ->addColumn('action', function($kategori_soal){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
                     ' <a onclick="edit('. $kategori_soal->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                    . '<a onclick="hapus('. $kategori_soal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
        $data['title'] = "iCoure | KATEGORI SOAL";
        $data['pagecontent'] = "admin.soal.kategori_soal.index";
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
        m_Kategori_Soal::create($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Kategori_Soal  $m_Kategori_Soal
     * @return \Illuminate\Http\Response
     */
    public function show(m_Kategori_Soal $m_Kategori_Soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Kategori_Soal  $m_Kategori_Soal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_soal = m_Kategori_Soal::find($id);
        return $kategori_soal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Kategori_Soal  $m_Kategori_Soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori_soal = m_Kategori_Soal::find($id);
        $kategori_soal->update($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Kategori_Soal  $m_Kategori_Soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Kategori_Soal::destroy($id);

        return response()->json([
            'success' => true
        ]);
    }
}
