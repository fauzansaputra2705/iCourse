<section id="content" style="overflow: visible;">

	<div class="content-wrap">

	</div>

	<div class="container">
		<form method="POST" action="{{ empty($sekolah) ? url(auth()->user()->level.'/sekolah') : url(auth()->user()->level.'/sekolah/'.$sekolah->id.'/edit') }}">
			@csrf
			@if( !empty($data) )
			<input type="hidden" name="_method" value="PATCH">
			@endif
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="npsn">NPSN</label>
					<input type="text" name="npsn" class="form-control" id="npsn" placeholder="">
				</div>
				<div class="form-group col-md-6">
					<label for="jenjang">Jenjang</label>
					<input type="text" name="jenjang" class="form-control" id="jenjang" placeholder="">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nama_sekolah">Nama Sekolah</label>
					<input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" placeholder="">
				</div>
				<div class="form-group col-md-6">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control" cols="20" rows="10"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="provinsi_id">Nama Provinsi</label>

					<select name="provinsi_id" id="provinsi_id" class="form-control">
					<option value="">Pilih Provinsi</option>
						@foreach ($provinsi as $p)
							<option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="kabupaten_id">Nama Kabupaten</label>
					<select name="kabupaten_id" id="kabupaten_id" class="form-control">
						<option value=""></option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="kecamatan_id">Nama Kecamatan</label>
					<select name="kecamatan_id" id="kecamatan_id" class="form-control">
						<option value=""></option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="kelurahan_id">Nama Kelurahan</label>
					<select name="kelurahan_id" id="kelurahan_id" class="form-control">
						<option value=""></option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6"></div>
				<div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary float-right ml-2">Save</button>
					<a href="{{ url('admin/sekolah') }}" class="btn btn-danger float-right mr-2">Kembali</a>
				</div>
			</div>
		</form>
	</div>
</section>

@section('addscript')
  <script>    
    

    // $(function(){
    //   $('#modal-form form').validator().on('submit', function (e) {
    //     if (!e.isDefaultPrevented()){
    //       var id = $('#id').val();
    //       if (save_method == 'add') url = "{{ url('admin/kelurahan') }}";
    //       else url = "{{ url('admin/kelurahan') . '/' }}" + id;

    //       $.ajax({
    //         url : url,
    //         type : "POST",
    //                     // data : $('#modal-form form').serialize(),
    //                     data: new FormData($("#modal-form form")[0]),
    //                     contentType: false,
    //                     processData: false,
    //                     success : function(data) {
    //                       $('#modal-form').modal('hide');
    //                       table.ajax.reload();
    //                       swal({
    //                         title: 'Success!',
    //                         text: data.message,
    //                         type: 'success',
    //                         timer: '3000'
    //                       })
    //                     },
    //                     error : function(data){
    //                       swal({
    //                         title: 'Oops...',
    //                         text: data.message,
    //                         type: 'error',
    //                         timer: '3000'
    //                       })
    //                     }
    //                   });
    //       return false;
    //     }
    //   });
    // });


    $("#kabupaten_id").prop('disabled', true);
    $("#kecamatan_id").prop('disabled', true);
    $("#kelurahan_id").prop('disabled', true);


    $('#provinsi_id').change(function(){
      var id_provinsi = $(this).val();
      if(id_provinsi){
        $.ajax({
         type:"GET",
         url:"{{url('admin/getKabupaten')}}/"+id_provinsi,
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
        url : "{{ url('admin/getKecamatan') }}/"+id_kabupaten,
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
        url : '{{ url('admin/getKelurahan') }}/'+id_kecamatan,
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