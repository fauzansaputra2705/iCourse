<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">
      <div class="container">
        <h1>Data Kecamatan</h1>
        <hr color="black" style="height: 2px;">
      </div>

      <div class="container">
        <a onclick="add()" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <table id="kecamatan" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Provinsi</th>
              <th>Nama Kabupaten</th>
              <th>Nama Kecamatan</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          </tbody>

          <tfoot>
          </tfoot>
        </table>
      </div>
    </div>
  </section>
  <!-- #content end -->
  @include('admin.wilayah.kecamatan.form')

  @section('addscript')
  <script>    
    var table = $('#kecamatan').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('json_kecamatan') }}',
      columns: [
      { data: 'id', name: 'id' },
      { data: 'nama_provinsi', name: 'nama_provinsi'},
      { data: 'nama_kabupaten', name: 'nama_kabupaten'},
      { data: 'nama_kecamatan', name: 'nama_kecamatan'},
      { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });
    function add() {
      save_method = "add";
      $('input[name=_method]').val('POST');
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('.modal-title').text('Tambah Kecamatan');
    }

    function edit(id) {
      save_method = 'edit';
      $('input[name=_method]').val('PATCH');
      $('#modal-form form')[0].reset();
      $.ajax({
        url: "{{ url('admin/kecamatan') }}" + '/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#modal-form').modal('show');
          $('.modal-title').text('Edit Kecamatan');

          $('#id').val(data.id);
          if ($('#id').val(data.id)) {
            $("#kabupaten_id").removeAttr('disabled');
            $("#nama_kecamatan").removeAttr('disabled');
          }
          $('#provinsi option[value="'+data.provinsi_id+'"]').prop('selected',true);
          $('#kabupaten_id option[value="'+data.kabupaten_id+'"]').prop('selected',true);
          $('#nama_kecamatan').val(data.nama_kecamatan);
          
        },
        error : function() {
          alert("Nothing Data");
        }
      });
    }

    function hapus(id){
      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      swal({
        title: 'Apakah Kamu Yakin?',
        text: "Anda tidak akan dapat mengembalikan ini!",
        type: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!'
      }).then(function () {
        $.ajax({
          url : "{{ url('admin/kecamatan') }}" + '/' + id,
          type : "POST",
          data : {'_method' : 'DELETE', '_token' : csrf_token},
          success : function(data) {
            table.ajax.reload();
            swal({
              title: 'Success!',
              text: data.message,
              type: 'success',
              timer: '3000'
            })
          },
          error : function () {
            swal({
              title: 'Oops...',
              text: data.message,
              type: 'error',
              timer: '3000'
            })
          }
        });
      });
    }

    $(function(){
      $('#modal-form form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()){
          var id = $('#id').val();
          if (save_method == 'add') url = "{{ url('admin/kecamatan') }}";
          else url = "{{ url('admin/kecamatan') . '/' }}" + id;

          $.ajax({
            url : url,
            type : "POST",
                        // data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                          $('#modal-form').modal('hide');
                          table.ajax.reload();
                          swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '3000'
                          })
                        },
                        error : function(data){
                          swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '3000'
                          })
                        }
                      });
          return false;
        }
      });
    });

    $("#provinsi").append('<option selected> Pilih Provinsi</option>');

    $("#kabupaten_id").prop('disabled', true);
    $("#kabupaten_id").append('<option selected> Pilih Provinsi Dahulu</option>');

    $("#nama_kecamatan").prop('disabled', true);
    $("#nama_kecamatan").prop('placeholder', 'Pilih Kabupaten Dahulu');


    $("#provinsi").select2({
      'width' : '100%',
      theme : 'bootstrap4',
    });

    $("#kabupaten_id").select2({
      'width' : '100%',
      theme : 'bootstrap4',
    });


    $('#provinsi').change(function(){
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
           $("#kabupaten_id").prop('disabled', true);
         }
       }
     });
      }else{
        $("#kabupaten_id").prop('disabled', true);
        $("#nama_kecamatan").prop('disabled', true);
      }      
    });

    $('#kabupaten_id').change(function() {
     var id_kabupaten = $(this).val();
     if(id_kabupaten){
      $("#nama_kecamatan").removeAttr('disabled');
    }else {
      $("#nama_kecamatan").prop('disabled', true);
    }
  });
</script>
@endsection