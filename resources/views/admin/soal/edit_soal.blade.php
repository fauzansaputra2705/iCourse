<section id="content" style="overflow: visible;">

	<div class="content-wrap">

    <div class="container">
      <h1>Edit Soal</h1>
      <hr color="black" style="height: 2px;">
    </div>

    <div class="container">

     <div class="jumbotron jumbotron-fluid mt-3">
      <div class="container">

       <form method="POST" action="{{ url('admin/soal/konten_soal/'.$kontensoal->soal_id.'/'.$kontensoal->id.'') }}" id="soal">
         @csrf
         @method('PATCH')

         <h3>Soal ke {{ $kontensoal->no_soal }}</h3>

         <input type="hidden" name="soal_id" value="{{ $kontensoal->soal_id }}">
         <input type="hidden" name="no_soal" value="{{ $kontensoal->no_soal }}">

         <div class="form-group">
           <textarea name="konten_soal" cols="30" rows="10">{{ $kontensoal->konten_soal }}</textarea>
         </div>

         @if ($soal->jenis_soal == "Pilihan Ganda")

         <input type="hidden" name="konten_soal_id" value="{{ $jawaban->konten_soal_id }}">
         <input type="hidden" value="{{ $soal->jenis_soal }}" id="jenis_soal" name="jenissoal">
         <input type="hidden" value="{{ $jawaban->jawaban_benar }}" id="jawaban_benar">

         <div class="form-group">

           <label for="">Jawaban</label>

           <div class="row">
            <div class="col-3">

              <input type="text" value="{{ $jawab[0] }}" placeholder="" name="jawaban[]" id="jawabana" class="form-control">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benara" name="jawaban_benar" />
                  <label for="jawaban_benara">A.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="{{ $jawab[1] }}" placeholder="" name="jawaban[]" class="form-control" id="jawabanb">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benarb" name="jawaban_benar" />
                  <label for="jawaban_benarb">B.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="{{ $jawab[2] }}" placeholder="" name="jawaban[]" class="form-control" id="jawabanc">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benarc" name="jawaban_benar" />
                  <label for="jawaban_benarc">C.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="{{ $jawab[3] }}" placeholder="" name="jawaban[]" class="form-control" id="jawaband">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benard" name="jawaban_benar" />
                  <label for="jawaban_benard">D.</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endif


      </div>
    </div>

    <button type="submit" class="btn btn-primary float-right ml-2" id="submit">Save</button>
    <a href="{{ url('admin/soal/konten_soal/'.$kontensoal->soal_id.'') }}" class="btn btn-danger float-right mr-2">Kembali</a>

  </form>


</div>

</section>

@section('addscript')
<script>

  CKEDITOR.replace('konten_soal', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

  var jawabana = $('#jawabana').val();
  var jawabanb = $('#jawabanb').val();
  var jawabanc = $('#jawabanc').val();
  var jawaband = $('#jawaband').val();
  var jawaban_benar = $('#jawaban_benar').val();


  $('#jawaban_benara').on('change', function() {
    $('#jawaban_benara').val(jawabana); 
  });

  $('#jawaban_benarb').on('change', function() {
    $('#jawaban_benarb').val(jawabanb); 
  });

  $('#jawaban_benarc').on('change', function() {
    $('#jawaban_benarc').val(jawabanc); 
  });

  $('#jawaban_benard').on('change', function() {
    $('#jawaban_benard').val(jawaband); 
  });


  if (jawaban_benar == jawabana) {
    $('#jawaban_benara').prop('checked', true);
    $('#jawaban_benara').val(jawabana);

  }else if (jawaban_benar == jawabanb) {
    $('#jawaban_benarb').prop('checked', true);
    $('#jawaban_benarb').val(jawabanb);

  }else if (jawaban_benar == jawabanc) {
    $('#jawaban_benarc').prop('checked', true);
    $('#jawaban_benarc').val(jawabanc);
  }else {
    $('#jawaban_benard').prop('checked', true);
    $('#jawaban_benard').val(jawaband);
  }
</script>
@endsection