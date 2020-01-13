<section id="content" style="overflow: visible;">

	<div class="content-wrap">

    <div class="container">
      <h1>Edit Soal</h1>
      <hr color="black" style="height: 2px;">
    </div>

    <div class="container">
{{-- @if ($kontensoal->soal_id == $soal->id && $kontensoal->id == $id) --}}

     <div class="jumbotron jumbotron-fluid mt-3">
      <div class="container">

       <form method="POST" action="{{ url('admin/soal/konten_soal/'.$kontensoal->soal_id.'/'.$kontensoal->id.'') }}" id="soal">
         @csrf
         @method('PATCH')

         <h3>Soal ke {{ $kontensoal->no_soal }}</h3>

         <input type="hidden" name="no_soal" value="{{ $kontensoal->no_soal }}">
         <input type="hidden" name="soal_id" value="{{ $kontensoal->soal_id }}">

         <div class="form-group">
           <textarea name="konten_soal" id="konten_soal" cols="30" rows="10">{!! $kontensoal->konten_soal !!}</textarea>
         </div>
         {{-- @endfor --}}
       </form>


       @if ($kontensoal->jenis_soal == "Pilihan Ganda")
       <form action="{{ url('admin/soal/jawaban_soal/') }}" id="jawaban">

       <input type="hidden" value="{{ $kontensoal->jenis_soal }}" id="jenis_soal">

       <input type="hidden" name="soal_id" value="{{ $kontensoal->id }}">
       <div class="form-group">

         <label for="">Jawaban</label>
         <div class="row">
          <div class="col-3">
            <input type="text" value="a. " placeholder="" name="jawaban" id="jawabana" class="form-control">
            <div class="form-check form-check-inline">
              <div class="radio icheck-emerland">
                <input type="radio" id="jawaban_benara" name="jawaban_benar" />
                <label for="jawaban_benara">A.</label>
              </div>
            </div>
          </div>

          <div class="col-3">
            <input type="text" value="b. " placeholder="" name="jawaban" class="form-control" id="jawabanb"> 
            <div class="form-check form-check-inline">
              <div class="radio icheck-emerland">
                <input type="radio" id="jawaban_benarb" name="jawaban_benar" />
                <label for="jawaban_benarb">B.</label>
              </div>
            </div>
          </div>

          <div class="col-3">
            <input type="text" value="c. " placeholder="" name="jawaban" class="form-control" id="jawabanc">
            <div class="form-check form-check-inline">
              <div class="radio icheck-emerland">
                <input type="radio" id="jawaban_benarc" name="jawaban_benar" />
                <label for="jawaban_benarc">C.</label>
              </div>
            </div>
          </div>

          <div class="col-3">
            <input type="text" value="d. " placeholder="" name="jawaban" class="form-control" id="jawaband">
            <div class="form-check form-check-inline">
              <div class="radio icheck-emerland">
                <input type="radio" id="jawaban_benard" name="jawaban_benar" />
                <label for="jawaban_benard">D.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      </form>
      @endif


    </div>
  </div>

  <button type="submit" class="btn btn-primary float-right ml-2" id="submit">Save</button>
  <a href="{{ url('admin/soal/konten_soal/'.$kontensoal->soal_id.'') }}" class="btn btn-danger float-right mr-2">Kembali</a>

{{-- @endif --}}

</div>

</section>

@section('addscript')
<script>
  var CSRFToken = $('meta[name="csrf-token"]').attr('content');
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='+CSRFToken,
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='+CSRFToken,
    language : 'en',
    removePlugins : 'save,maximize'
  };


  CKEDITOR.replace('konten_soal', options);

  $('#submit').click(function() {
    var jenissoal = $('#jenis_soal').val();
    if (jenissoal == "Pilihan Ganda") {
      $('#soal').submit();
      $('#jawaban').submit();
    }else{
      $('#soal').submit();
    }
  })

</script>
@endsection