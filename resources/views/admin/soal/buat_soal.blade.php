<section id="content" style="overflow: visible;">

	<div class="content-wrap">

    <div class="container">
      <h1>Buat Soal</h1>
      <hr color="black" style="height: 2px;">
    </div>

    <div class="container">


     <div class="jumbotron jumbotron-fluid mt-3">
      <div class="container">

       <form method="POST" action="{{ url('admin/soal/konten_soal/') }}" id="soal">
         @csrf
         @method('POST')

         <h3>Soal ke {{ $jumlahsoal+1 }}</h3>

         <input type="hidden" name="no_soal" value="{{ $jumlahsoal+1 }}">
         <input type="hidden" name="soal_id" value="{{ $soal->id }}">

         <div class="form-group">
           <textarea name="konten_soal" cols="30" rows="10"></textarea>
         </div>


         @if ($soal->jenis_soal == "Pilihan Ganda")

         <input type="hidden" value="{{ $soal->jenis_soal }}" id="jenis_soal" name="jenissoal">

         <input type="hidden" name="soal_id" value="{{ $soal->id }}">
         <input type="hidden" name="no_soal" value="{{ $jumlahsoal+1 }}">

         <div class="form-group">

           <label for="">Jawaban</label>

           <div class="row">
            <div class="col-3">

              <input type="text" value="" placeholder="" name="jawaban[]" id="jawabana" class="form-control">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benara" name="jawaban_benar" />
                  <label for="jawaban_benara">A.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="" placeholder="" name="jawaban[]" class="form-control" id="jawabanb">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benarb" name="jawaban_benar" />
                  <label for="jawaban_benarb">B.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="" placeholder="" name="jawaban[]" class="form-control" id="jawabanc">

              <div class="form-check form-check-inline">
                <div class="radio icheck-emerland">
                  <input type="radio" id="jawaban_benarc" name="jawaban_benar" />
                  <label for="jawaban_benarc">C.</label>
                </div>
              </div>
            </div>

            <div class="col-3">

              <input type="text" value="" placeholder="" name="jawaban[]" class="form-control" id="jawaband">

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
    <a href="{{ url('admin/soal/konten_soal/'.$soal->id.'') }}" class="btn btn-danger float-right mr-2">Kembali</a>

  </form>
</div>

</section>

@section('addscript')
<script>
  

  CKEDITOR.replace('konten_soal', {
        language: 'en',
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });
  CKEDITOR.config.allowedContent = true;


  $('#jawaban_benara').on('change', function() {
    var jawaban = ($('#jawabana').val());
    $('#jawaban_benara').val(jawaban); 
  });

  $('#jawaban_benarb').on('change', function() {
    var jawaban = ($('#jawabanb').val());
    $('#jawaban_benarb').val(jawaban); 
  });

  $('#jawaban_benarc').on('change', function() {
    var jawaban = ($('#jawabanc').val());
    $('#jawaban_benarc').val(jawaban); 
  });

  $('#jawaban_benard').on('change', function() {
    var jawaban = ($('#jawaband').val());
    $('#jawaban_benard').val(jawaban); 
  });
</script>
@endsection