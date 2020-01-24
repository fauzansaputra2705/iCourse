<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\m_Kategori_Quiz;
use DataTables;


class MKategoriQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function json()
    {
        $kategori_quiz = m_Kategori_Quiz::all();

        return DataTables::of($kategori_quiz)
        ->addColumn('action', function($kategori_quiz){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
                     ' <a onclick="edit('. $kategori_quiz->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                    . '<a onclick="hapus('. $kategori_quiz->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }



    public function index()
    {
        $data['title'] = "iCourse | KATEGORI QUIZ";
        $data['pagecontent'] = "admin.quiz.kategori_quiz.index";
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
        m_Kategori_Quiz::create($request->all());

        return response()->json([
            "success" => true
        ]);
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
        $kategori_quiz = m_Kategori_Quiz::find($id);
        return $kategori_quiz;
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
        $kategori_quiz = m_Kategori_Quiz::find($id);

        $kategori_quiz->update($request->all());

        return response()->json([
            "success" => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_Kategori_Quiz::destroy($id);

        return response()->json([
            "success" => true
        ]);
    }
}
