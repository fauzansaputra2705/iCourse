<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">
      <div class="container">
        <h1>Data Kabupaten</h1>
        <hr color="black" style="height: 2px;">
      </div>

      <div class="container">
        <a onclick="add()" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <table id="kabupaten" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Provinsi</th>
              <th>Nama Kabupaten</th>
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
  @include('admin.wilayah.kabupaten.form')

  @section('addscript')
  <script>    
    var table = $('#kabupaten').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('json_kabupaten') }}',
      columns: [
      { data: 'id', name: 'id' },
      { data: 'nama_provinsi', name: 'nama_provinsi'},
      { data: 'nama_kabupaten', name: 'nama_kabupaten'},
      { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });
    function add() {
      save_method = "add";
      $("#provinsi_id").select2("val", "");
      $('input[name=_method]').val('POST');
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('.modal-title').text('Tambah Kabupaten');
    }

    function edit(id) {
      save_method = 'edit';
      $("#provinsi_id").select2("val", "");
      $('input[name=_method]').val('PATCH');
      $('#modal-form form')[0].reset();
      $.ajax({
        url: "{{ url('admin/kabupaten') }}" + '/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#modal-form').modal('show');
          $('.modal-title').text('Edit Kabupaten');

          $('#id').val(data.id);
          $('#provinsi_id option[value="'+data.provinsi_id+'"]').prop('selected',true);
          var nama_kabupaten = $('#nama_kabupaten').val(data.nama_kabupaten);
          if (nama_kabupaten) {
            $('#nama_kabupaten').removeAttr('disabled');
          }

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
          url : "{{ url('admin/kabupaten') }}" + '/' + id,
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
          if (save_method == 'add') url = "{{ url('admin/kabupaten') }}";
          else url = "{{ url('admin/kabupaten') . '/' }}" + id;

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

    $('#provinsi_id').select2({
      theme: 'bootstrap4',
      'width' : '100%',
    });


    $('#provinsi_id').append('<option selected> Pilih Provinsi </option>');
    $('#nama_kabupaten').prop('disabled', true);
    $('#nama_kabupaten').prop('placeholder', 'Pilih Provinsi Dahulu');

    $('#provinsi_id').change(function() {
      var provinsi_id = $(this).val()
      if (provinsi_id) {
        $('#nama_kabupaten').removeAttr('disabled');
        $('#nama_kabupaten').prop('placeholder', 'Nama Provinsi'); 
      }else{
        $('#nama_kabupaten').prop('disabled', true);
        $('#nama_kabupaten').prop('placeholder', 'Pilih Provinsi Dahulu');
      }
    });
  </script>
  @endsection