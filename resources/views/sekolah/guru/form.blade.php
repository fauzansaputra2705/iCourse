<section id="content" style="overflow: visible;">

	<div class="content-wrap">
    <div class="container">
      <h1>{{ empty($guru) ? "Tambah Guru" : "Edit Guru" }}</h1>
      <hr color="black" style="height: 2px;">
    </div>

    <div class="container">
      <form method="POST" id="form_sekolah" action="{{ empty($guru) ? url(auth()->user()->level.'/guru') : url(auth()->user()->level.'/guru/'.$guru->id) }}">
       @csrf
       @if( !empty($guru) )
       <input type="hidden" name="_method" value="PATCH">
       <input type="hidden" name="user_id" value="{{ $guru->user_id }}">
       @endif

       <div class="form-row">
        <div class="form-group col-md-6">
         <label for="nik">NIK</label>
         <input type="text" name="nik" @if(!empty($guru)) value="{{ $guru->nik }}" @endif class="form-control" id="nik" placeholder="">
       </div>
       <div class="form-group col-md-6">
         <label for="nama_lengkap">Nama Lengkap</label>
         <input type="text" name="nama_lengkap" @if(!empty($guru)) value="{{ $guru->nama_lengkap }}" @endif class="form-control" id="nama_lengkap" placeholder="">
       </div>
     </div>

     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="">Jenis Kelamin</label>
         <br>
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" @if(!empty($guru)) @if ($guru->jenis_kelamin == 'Laki-laki') checked @endif @endif id="Laki-laki" value="Laki-laki">
          <label class="form-check-label" for="Laki-laki">{{ __('Laki-laki') }}</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" @if(!empty($guru))  @if ($guru->jenis_kelamin == 'Perempuan') checked @endif @endif id="Perempuan" value="Perempuan">
          <label class="form-check-label" for="Perempuan">{{ __('Perempuan') }}</label>
        </div>

      </div>
      <div class="form-group col-md-6">
       <label for="tanggal_lahir">Tanggal Lahir</label>
       <input type="date" name="tanggal_lahir" @if(!empty($guru)) value="{{ $guru->tanggal_lahir }}" @endif class="form-control" id="tanggal_lahir" placeholder="">
     </div>
   </div>

   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="alamat">Alamat</label>
       <textarea name="alamat" id="alamat" class="form-control" cols="20" rows="10">@if(!empty($guru)) {{ $guru->alamat }} @endif</textarea>
     </div>
     
     <input type="hidden" name="sekolah_id" @if(!empty($guru)) value="{{ $guru->sekolah_id }}" @else value="{{ $sekolah_id->id }}" @endif >
     {{-- <div class="form-group col-md-6">
       <label for="nama_sekolah">Nama Sekolah</label>
       <select name="sekolah_id" id="sekolah_id" class="form-control select2">
         @foreach ($sekolah as $sklh)
           <option value="{{ $sklh->id }}">{{ $sklh->nama_sekolah }}</option>
         @endforeach
       </select>
     </div> --}}
   </div>

   <div class="form-row">
    <div class="form-group col-md-6">
     <label for="provinsi_id">Nama Provinsi</label>
     <select name="provinsi_id" id="provinsi_id" class="form-control select2">
       @foreach ($provinsi as $p)
       <option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>
       @endforeach
     </select>
   </div>
     <div class="form-group col-md-6">
       <label for="kabupaten_id">Nama Kabupaten</label>
       <select name="kabupaten_id" id="kabupaten_id" class="form-control select2">
        <option value=""></option>
      </select>
    </div>
 </div>

 <div class="form-row">
  <div class="form-group col-md-6">
    <label for="kecamatan_id">Nama Kecamatan</label>
    <select name="kecamatan_id" id="kecamatan_id" class="form-control select2">
      <option value=""></option>
    </select>
  </div>
  <div class="form-group col-md-6">
   <label for="kelurahan_id">Nama Kelurahan</label>
   <select name="kelurahan_id" id="kelurahan_id" class="form-control select2">
    <option value=""></option>
  </select>
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-6"></div>
  <div class="form-group col-md-6">
   <button type="submit" class="btn btn-primary float-right ml-2">Save</button>
   <a href="{{ url('sekolah/guru') }}" class="btn btn-danger float-right mr-2">Kembali</a>
 </div>
</div>

</form>
</div>
</div>
</section>

@section('addscript')
<script>   

 $("#provinsi_id").select2({
  'width' : '100%',
  theme : 'bootstrap4',
});

 $("#kabupaten_id").select2({
  'width' : '100%',
  theme : 'bootstrap4',
});

 $("#kecamatan_id").select2({
  'width' : '100%',
  theme : 'bootstrap4',
});

 $("#provinsi_id").append('<option selected> Pilih Provinsi</option>');

 $("#kabupaten_id").prop('disabled', true);
 $("#kabupaten_id").append('<option selected> Pilih Provinsi Dahulu</option>');

 $("#kecamatan_id").prop('disabled', true);
 $("#kecamatan_id").append('<option selected> Pilih Kabupaten Dahulu</option>');

 $("#kelurahan_id").prop('disabled', true);
 $('#kelurahan_id').append('<option selected> Pilih Kecamatan Dahulu</option>');


 $('#provinsi_id').change(function(){
  var id_provinsi = $(this).val();
  if(id_provinsi){
    $.ajax({
     type:"GET",
     url:"{{url('sekolah/getKabupaten')}}/"+id_provinsi,
     success:function(res){               
      if(res){
        $("#kabupaten_id").empty();
        $("#kabupaten_id").removeAttr('disabled');
        $("#kabupaten_id").append('<option>Pilih Kabupaten</option>');
        $.each(res,function(key,value){
          $("#kabupaten_id").append('<option value="'+key+'">'+value+'</option>');
        });

      }else{
               // $("kabupaten_id").empty();
               $("#kabupaten_id").prop('disabled', true);
             }
           }
         });
  }else{
        // $("kabupaten_id").empty();
        $("#kabupaten_id").prop('disabled', true);
        $("#kecamatan_id").prop('disabled', true);
        $("#kelurahan_id").prop('disabled', true);
        // $("#city").empty();
      }      
    });



 $('#kabupaten_id').change(function() {
   var id_kabupaten = $(this).val();
   if(id_kabupaten){
    $.ajax({
      type : "GET",
      url : "{{ url('sekolah/getKecamatan') }}/"+id_kabupaten,
      success : function(res) {
        if(res){
          $("#kecamatan_id").empty();
          $("#kecamatan_id").removeAttr('disabled');
          $("#kecamatan_id").append('<option>Pilih Kecamatan</option>');
          $.each(res,function(key,value){
            $("#kecamatan_id").append('<option value="'+key+'">'+value+'</option>');
          });
        }else{
          $("#kecamatan_id").prop('disabled', true);
        }
      }
    });
  }else {
    $("#kecamatan_id").prop('disabled', true);
    $("#kecamatan_id").prop('disabled', true);
    $("#kelurahan_id").prop('disabled', true);
  }
});


 $('#kecamatan_id').change(function() {
  var id_kecamatan = $(this).val();
  if(id_kecamatan){
    $.ajax({
      type : 'GET',
      url : '{{ url('sekolah/getKelurahan') }}/'+id_kecamatan,
      success : function(res){
        if(res){
          $("#kelurahan_id").empty();
          $("#kelurahan_id").removeAttr('disabled');
          $("#kelurahan_id").append('<option>Pilih Kelurahan</option>');
          $.each(res,function(key,value){
            $("#kelurahan_id").append('<option value="'+key+'">'+value+'</option>');
          });
        }else{
          $("#kelurahan_id").prop('disabled', true);
        }
      }
    });
  }else {
    $("#kecamatan_id").prop('disabled', true);
    $("#kecamatan_id").prop('disabled', true);
    $("#kelurahan_id").prop('disabled', true);
  }
})
</script>
@endsection