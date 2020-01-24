<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\m_Siswa;
use App\m_Sekolah;
use App\m_Provinsi;
use App\User;
use DataTables;
use Auth;
use DB;

class MSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function json($sekolah_id)
    {
        // $data = m_Siswa::all();
        $data = DB::table('m_siswa')
        ->join('m_kelurahan','m_siswa.kelurahan_id', '=', 'm_kelurahan.id','left')
        ->join('m_kecamatan','m_siswa.kecamatan_id', '=', 'm_kecamatan.id','left')
        ->join('m_kabupaten','m_siswa.kabupaten_id', '=', 'm_kabupaten.id','left')
        ->join('m_provinsi','m_siswa.provinsi_id', '=', 'm_provinsi.id','left')
        ->join('m_sekolah','m_siswa.sekolah_id', '=', 'm_sekolah.id','left')
        ->join('m_user', 'm_siswa.user_id', '=', 'm_user.id', 'left')
        ->select('m_siswa.*','m_kelurahan.nama_kelurahan', 'm_kecamatan.nama_kecamatan' ,'m_kabupaten.nama_kabupaten', 'm_provinsi.nama_provinsi', 'm_sekolah.nama_sekolah', 'm_user.email')
        ->where('sekolah_id',$sekolah_id)
        ->get();
        return DataTables::of($data)

        ->addColumn('user_id', function($data){
            return $data->email;
        })

        ->addColumn('action', function($data){
            return  /*' <a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a> '*/
            ' <a href="'. url("sekolah/siswa/$data->id/edit") .'" class="btn btn-primary btn-xs text-white"><i class="fas fa-edit text-white"></i></a> '
            . '<a onclick="hapus('.$data->id.','.$data->user_id.')" class="btn btn-danger btn-xs text-white"><i class="fas fa-trash-alt text-white"></i></a> ';
        })
        ->rawColumns(['nama_provinsi','nama_kabupaten','nama_kecamatan','nama_kelurahan','nama_sekolah','user_id','action'])
        ->make(true);
    }



    public function index()
    {
        $data['title'] = "iCourse | SISWA";
        $data['pagecontent'] = "sekolah.siswa.index";
        $data['sekolah_id'] = m_Sekolah::where('nama_sekolah', Auth::user()->name)->first('id');
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
        $data['title'] = "iCourse | CREATE SISWA";
        $data['pagecontent'] = "sekolah.siswa.form";
        $data['provinsi'] = m_Provinsi::all();
        // $data['sekolah'] = m_Sekolah::all();
        $data['sekolah_id'] = m_Sekolah::where('nama_sekolah', Auth::user()->name)->first('id');

        return view ('layouts.app',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $explode = explode(" ", strtolower($request->nama_lengkap));

        if ( !empty($explode[1]) ) {
            $email = str_replace(" ", "_", $explode[0]." ".$explode[1]);
        }else{
            $email = str_replace(" ", "_", $explode[0]." ");
        }

        $ma = User::where('email', $email."@gmail.com")->first('email');

        if ($ma == null) {
            $email = $email;
        }elseif($email."@gmail.com" == $ma->email) {
            $email = $email.rand(1,100);
        }

        User::create([
            'name' => $request->nama_lengkap,
            'email' => $email."@gmail.com",
            'no_akun' => 0,
            'password' => bcrypt('siswa@123'),
            'level' => 'siswa',
        ]);

        $user_id = User::where('email',$email."@gmail.com")->first('id');

        m_Siswa::create([
            'nik' => $request->nik, 
            'nama_lengkap' => $request->nama_lengkap, 
            'jenis_kelamin' => $request->jenis_kelamin, 
            'tanggal_lahir' => $request->tanggal_lahir, 
            'alamat' => $request->alamat, 
            'sekolah_id' => $request->sekolah_id, 
            'provinsi_id' => $request->provinsi_id, 
            'kabupaten_id' => $request->kabupaten_id, 
            'kecamatan_id'  => $request->kecamatan_id, 
            'kelurahan_id' => $request->kelurahan_id,
            'user_id' => $user_id->id,
        ]);

        // dd([
        //     'nik' => $request->nik, 
        //     'nama_lengkap' => $request->nama_lengkap, 
        //     'jenis_kelamin' => $request->jenis_kelamin, 
        //     'tanggal_lahir' => $request->tanggal_lahir, 
        //     'alamat' => $request->alamat, 
        //     'sekolah_id' => $request->sekolah_id, 
        //     'provinsi_id' => $request->provinsi_id, 
        //     'kabupaten_id' => $request->kabupaten_id, 
        //     'kecamatan_id'  => $request->kecamatan_id, 
        //     'kelurahan_id' => $request->kelurahan_id,
        //     'user_id' => $user_id->id,
        // ]);

        return redirect('sekolah/siswa');
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
        $data['title'] = "iCourse | EDIT GURU";
        $data['pagecontent'] = "sekolah.siswa.form";
        $data['siswa'] = m_Siswa::find($id);
        $data['provinsi'] = m_Provinsi::all();
        // $data['sekolah'] = m_Sekolah::all();

        return view('layouts.app',$data);
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
        $siswa = m_Siswa::find($id);
        $siswa->update($request->all());

        $user = User::where('id', $request->user_id)->first('id');
        $user->update(['name'=>$request->nama_lengkap]);

        return redirect('sekolah/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , $user_id)
    {
        m_Siswa::destroy($id);
        User::where('id', $user_id)->delete();

        return response()->json([
            "success" => true
        ]);
    }
}
