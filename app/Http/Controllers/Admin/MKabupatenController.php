<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\m_Kabupaten;
use App\m_Provinsi;
use Illuminate\Http\Request;
use DataTables;
use DB;

class MKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json()
    {
        // $data['kabupaten'] = m_Kabupaten::all();

        $data = DB::table('m_provinsi')
                    ->join('m_kabupaten','m_provinsi.id', '=', 'm_kabupaten.provinsi_id')
                    ->select('m_provinsi.*', 'm_kabupaten.*')
                    ->get();

        return DataTables::of($data)

        ->addColumn('nama_provinsi', function($data){
                return $data->nama_provinsi;
        })

        ->addColumn('action', function($data){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
                     ' <a onclick="edit('. $data->id .')" 
                     class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                    . '<a onclick="hapus('. $data->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['nama_provinsi','action'])
        ->make(true);
    }


    public function index()
    {
        $data['title'] = "iCourse | KABUPATEN";
        $data['pagecontent'] = "admin.wilayah.kabupaten.index";
        $data['provinsi'] = m_Provinsi::all();
        
        return view('layouts.app',$data);
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
        m_Kabupaten::create($request->all());

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_Kabupaten  $m_Kabupaten
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_Kabupaten  $m_Kabupaten
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kabupaten = m_Kabupaten::find($id);
        return $kabupaten;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_Kabupaten  $m_Kabupaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $kabupaten = m_Kabupaten::find($id);

        $kabupaten->update($input);
        
        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_Kabupaten  $m_Kabupaten
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Kabupaten::destroy($id);

        return response()->json([
            'success' => true
        ]);
    }
}
