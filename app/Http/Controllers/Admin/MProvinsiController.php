<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\m_Provinsi;
use DataTables;

class MProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
        $provinsi = m_Provinsi::all();

        return DataTables::of($provinsi)
        ->addColumn('action', function($provinsi){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
                     ' <a onclick="edit('. $provinsi->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                    . '<a onclick="hapus('. $provinsi->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function index()
    {
        $data['title'] = "iCourse | PROVINSI";
        $data['pagecontent'] = "admin.wilayah.provinsi.index";
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
        $input = $request->all();

        m_Provinsi::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Provinsi  $m_Provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Provinsi  $m_Provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = m_Provinsi::find($id);
        return $provinsi;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Provinsi  $m_Provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $provinsi = m_Provinsi::find($id);

        $provinsi->update($input);
        
        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Provinsi  $m_Provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Provinsi::destroy($id);

        return response()->json([
            'success' => true
        ]);

    }
}
