<?php

namespace App\Http\Controllers;

use App\m_Soal;
use App\m_Guru;
use App\m_Kategori_Soal;
use App\ref_konten_soal;
use App\ref_jawaban_soal;
use Session;
use DataTables;
use Auth;
use DB;
use Illuminate\Http\Request;

class MSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function jsonadmin()
    {
        $soal = DB::table('m_soal')
        ->join('m_kategori_soal', 'm_kategori_soal.id', '=', 'm_soal.kategori_soal_id')
        ->select('m_soal.*', 'm_kategori_soal.kategori_soal')
        ->get();

        return DataTables::of($soal)

        ->addColumn('jumlahsoal', function($soal){
            $jumlahsoal = ref_konten_soal::where('soal_id', $soal->id)->count();
            return $jumlahsoal;
        })

        ->addColumn('pembuat', function($soal){
            if ($soal->guru_id == 0) {
                return "Admin";
            }else{
                $guru_id = m_Guru::where('id', $soal->guru_id)->first('nama_lengkap');
                    return $guru_id->nama_lengkap;
            }
        })

        ->addColumn('action', function($soal){
            if (!$soal->guru_id == 0) {
                return ' <a href="'. url('admin/soal/'.$soal->id.'') .'" class="btn btn-success btn-xs text-white">View Soal</a>';
            }else{
                return
                ' <a onclick="edit('. $soal->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
                .' <a onclick="hapus('. $soal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> '
                .' <a href="'. url('admin/soal/konten_soal/'.$soal->id.'') .'" class="btn btn-primary btn-xs text-white">Buat/Edit Soal</a> '
                .' <a href="'. url('admin/soal/'.$soal->id.'') .'" class="btn btn-success btn-xs text-white">View Soal</a> ';
            }
        })
        ->rawColumns(['action','jumlahsoal','pembuat'])
        ->make(true);
    }



    public function jsonguru($guru_id)
    {
        $soal = DB::table('m_soal')
        ->join('m_kategori_soal', 'm_kategori_soal.id', '=', 'm_soal.kategori_soal_id')
        ->select('m_soal.*', 'm_kategori_soal.kategori_soal')
        ->where('guru_id',$guru_id)
        ->get();

        return DataTables::of($soal)

        ->addColumn('jumlahsoal', function($soal){
            $jumlahsoal = ref_konten_soal::where('soal_id', $soal->id)->count();
            return $jumlahsoal;
        })

        // ->addColumn('pembuat', function($soal){
        //     if ($soal->guru_id == 0) {
        //         return "Admin";
        //     }else{
        //         $guru_id = m_Guru::where('id', $soal->guru_id)->first('nama_lengkap');
        //             return $guru_id->nama_lengkap;
        //     }
        // })

        ->addColumn('action', function($soal){
            return  
            ' <a onclick="edit('. $soal->id .')" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            .' <a onclick="hapus('. $soal->id .')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> '
            .' <a href="'. url('guru/soal/konten_soal/'.$soal->id.'') .'" class="btn btn-primary btn-xs text-white">Buat/Edit Soal</a> '
            .' <a href="'. url('guru/soal/'.$soal->id.'') .'" class="btn btn-success btn-xs text-white">View Soal</a> ';
        })
        ->rawColumns(['action','jumlahsoal'])
        ->make(true);
    }



    public function index()
    {
        if (Auth::check() && Auth::user()->level == "admin") {
            $data['title'] = "iCourse | SOAL";
            $data['pagecontent'] = "admin.soal.data_soal";
            $data['kategorisoal'] = m_Kategori_Soal::all();
            return view('layouts.app',$data);

        }elseif (Auth::check() && Auth::user()->level == "guru") {
            $data['title'] = "iCourse | SOAL";
            $data['pagecontent'] = "guru.soal.data_soal";
            $data['kategorisoal'] = m_Kategori_Soal::all();
            $data['guru_id'] = DB::table('m_guru')->where('nama_lengkap', Auth::user()->name)->first('id'); 
            return view('layouts.app',$data);
        }
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
            'jenis_soal' => $request->jenis_soal,
            'tag_materi' => $request->tag_materi,
            'guru_id' => $request->guru_id,
            // 'jumlah_soal' => 0,
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
    public function show($id)
    {
        $data['soal'] = m_Soal::find($id);
        $data['konten_soal'] = ref_konten_soal::where('soal_id',$id)->get();
        $data['jawaban'] = ref_jawaban_soal::where('soal_id',$id)->get();
        // $data['jawab'] = explode('{{-- Batas JAWABAN --}}', $jb->jawaban);
        $data['title'] = 'iCourse | VIEW SOAL';
        $data['pagecontent'] = 'admin.soal.view_soal';
        return view ('layouts.app', $data);
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
        $jumlahsoal = ref_konten_soal::where('soal_id', $id)->count();
        return ['soal' => $soal, 'jumlahsoal' => $jumlahsoal];
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
            'kategori_soal_id' => $request->kategori_soal_id,
            'jenis_soal' => $request->jenis_soal,
            'tag_materi' => $request->tag_materi,
            // 'jumlah_soal' => $request->jumlah_soal,
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
        ref_konten_soal::where('soal_id',$id)->delete();
        ref_jawaban_soal::where('soal_id',$id)->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
