<section id="content" style="overflow: visible;">

	<div class="content-wrap">
    <div class="container">
      <h1>Buat Soal</h1>
      <hr color="black" style="height: 2px;">
    </div>

    <div class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h3>Soal ke 1</h3>
          <form method="POST" id="form_sekolah" action="{{ url('admin/soal/create_soal/'.$soal->id.'') }}">
           @csrf
           @method("PATCH")

           <div class="form-group">
             <textarea name="konten_soal" id="konten_soal" cols="30" rows="10"></textarea>
           </div>

           <input type="hidden" name="soal_id" value="{{ $soal->id }}">
           <div class="form-group">
             <label for="">Jawaban</label>
             <input type="text" name="" value="a. " placeholder=""> 
             <input type="text" name="" value="b. " placeholder=""> 
             <input type="text" name="" value="c. " placeholder=""> 
             <input type="text" name="" value="d. " placeholder=""> 
           </div>


         </div>
       </div>
       <button type="submit" class="btn btn-primary float-right ml-2">Save</button>
       <a href="{{ route('soal.index') }}" class="btn btn-danger float-right mr-2">Kembali</a>
     </form>
   </div>
 </div>
</section>

@section('addscript')
<script>
  CKEDITOR.replace( 'konten_soal', {
    language: 'en',
    // uiColor: '#9AB8F3',
    removePlugins : 'save,maximize',
  } );
</script>
@endsection