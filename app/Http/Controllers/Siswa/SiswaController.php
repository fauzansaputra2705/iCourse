<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\m_Kategori_Soal;
use App\m_Soal;
use App\ref_konten_soal;
use App\ref_jawaban_soal;
use App\t_siswa_quiz;
use DB;
use Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "iCourse | SISWA";
        $data['pagecontent'] = "siswa.index";
        return view('layouts.app', $data);
    }

    public function quiz()
    {
        $data['title'] = "iCourse | QUIZ";
        $data['pagecontent'] = "siswa.quiz";
        $data['kategori_soal'] = m_Kategori_Soal::all();
        // $data['soal_pilihan_ganda'] = m_Soal::where('jenis_soal', "Pilihan Ganda")->get();
        // $data['soal_essay'] = m_Soal::where('jenis_soal', "Essay")->get();
        $data['soalall'] = m_Soal::all();
        return view('layouts.app',$data); 
    }

    public function start(Request $request)
    {
        $id = $request->soal_id;
        $no_soal = 1;
        // return redirect('siswa/getallquiz/'.$id.'/'.$no_soal);
        return redirect('siswa/startquiz/'.$id.'/'.$no_soal);
    }

    // public function getallquiz($id, $no_soal)
    // {
    //     $soal = m_Soal::find($id);
    //     $konten_soal = ref_konten_soal::where('soal_id',$id)->where('no_soal', $no_soal)->first();
    //     $jawaban = ref_jawaban_soal::where('soal_id',$id)->where('no_soal', $no_soal)->first();
    //     $jumlahsoal = ref_konten_soal::where('soal_id',$id)->count();
    //     $ragu = t_siswa_quiz::get('ragu_ragu');

    //     return ['soal'=>$soal, 'jawaban'=>$jawaban, 'konten_soal'=>$konten_soal, 'jumlahsoal'=>$jumlahsoal, 'ragu'=>$ragu];
    // }


    public function startquiz ($id, $no_soal)
    {
        $data['soal'] = m_Soal::find($id);
        $data['konten_soal'] = ref_konten_soal::where('soal_id',$id)->where('no_soal', $no_soal)->get();
        $data['jawaban'] = ref_jawaban_soal::where('soal_id',$id)->where('no_soal', $no_soal)->get();
        $data['jumlahsoal'] = ref_konten_soal::where('soal_id',$id)->count();
        $jumlahsoal = ref_konten_soal::where('soal_id',$id)->count();
        $data['ragu'] = t_siswa_quiz::where('user_id',Auth::user()->id)->get();;

        $data['title'] =  "iCourse | UJIAN";
        $data['pagecontent'] = 'siswa.startquiz';
        $data['id_soal'] = $id;
        $data['next_soal'] =$no_soal + 1;
        $data['before_soal'] =$no_soal - 1;
        $data['no'] =$no_soal;
        // $this->getquiz($id, $no_soal);
        return view('layouts.app',$data);
    }

    public function ragu()
    {
        $tsq = t_siswa_quiz::where('user_id',Auth::user()->id)->get();
        return $tsq;
    }

    function savequiz(Request $request)
    {
                $id = $request->id_t_siswa;
                $no_soal = $request->no_soal;
                $soal_id = $request->soal_id;
                $konten_soal_id = $request->konten_soal_id;
                $jawaban_soal_id = $request->jawaban_soal_id;
                $ragu_ragu = $request->ragu_ragu;
                $jawaban_siswa = $request->jawaban_siswa;
                 $user_id = Auth::user()->id;

                t_siswa_quiz::create([
                    'soal_id' => $soal_id, 
                    'no_soal' => $no_soal,
                    'konten_soal_id' => $konten_soal_id, 
                    'jawaban_soal_id' => $jawaban_soal_id, 
                    'ragu_ragu' => $ragu_ragu, 
                    'jawaban_siswa' => $jawaban_siswa,
                    'user_id' => $user_id,
                ]);

    }

    public function updatequiz(Request $request , $id)
    {
        // $id = $request->id_t_siswa;
        $no_soal = $request->no_soal;
        $soal_id = $request->soal_id;
        $konten_soal_id = $request->konten_soal_id;
        $jawaban_soal_id = $request->jawaban_soal_id;
        $ragu_ragu = $request->ragu_ragu;
        $jawaban_siswa = $request->jawaban_siswa;
        $user_id = Auth::user()->id;

        $siswaquiz = t_siswa_quiz::find($id);
        $siswaquiz->update([
                'soal_id' => $soal_id, 
                'konten_soal_id' => $konten_soal_id, 
                'jawaban_soal_id' => $jawaban_soal_id, 
                'ragu_ragu' => $ragu_ragu, 
                'jawaban_siswa' => $jawaban_siswa,
                'no_soal' => $no_soal,
                'user_id' => $user_id,
            ]);
    }

    public function getquiz($id,$no_soal)
    {
        $siswaquiz = t_siswa_quiz::where('soal_id',$id)->where('no_soal',$no_soal)->where('user_id',Auth::user()->id)->first();
        return $siswaquiz;
    }

    function periksaquiz()
    {
        $data['title'] = "iCourse | Hasil";
        $data['pagecontent'] = "siswa.finish";
        $data['siswaquiz'] = DB::table('t_siswa_quiz')
        // ->join('ref_jawaban_soal','ref_jawaban_soal.soal_id', '=' ,'t_siswa_quiz.soal_id')
        ->join('m_soal','m_soal.id', '=' ,'t_siswa_quiz.soal_id')
        ->join('m_user','m_user.id', '=' ,'t_siswa_quiz.user_id')
        ->join('ref_jawaban_soal','ref_jawaban_soal.id','t_siswa_quiz.jawaban_soal_id')
        ->select('t_siswa_quiz.*','ref_jawaban_soal.jawaban_benar','m_user.name','m_soal.tag_materi')
        ->where('user_id',Auth::user()->id)
        // ->where('ref_jawaban_soal.jawaban_benar','t_siswa_quiz.jawaban_siswa')
        ->get();

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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
