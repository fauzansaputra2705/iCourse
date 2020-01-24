<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">
      <div class="container">
        <h1>Data Konten Soal</h1>
        <hr color="black" style="height: 2px;">
      </div>

      <div class="container">
        <a href="{{ url('guru/soal/konten_soal/'.$soal->id.'/create/') }}" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <a href="{{ route('soal.index') }}" class="btn btn-danger float-lg-right mb-3">Kembali</a>

        <table id="kontensoal" class="table table-striped table-bordered" style="width:100%">
          <thead>
            @if ($soal->jenis_soal == "Pilihan Ganda")
              <tr>
                <th>NO Soal</th>
                <th>Konten Soal</th>
                <th>Jawaban</th>
                <th>Jawaban Benar</th>
                <th>Action</th>
              </tr>
            @else
              <tr>
                <th>NO Soal</th>
                <th>Konten Soal</th>
                <th>Action</th>
              </tr>
            @endif
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

  @section('addscript')
  <script>

    if ("{{ $soal->jenis_soal }}" == "Pilihan Ganda") {
        var table = $('#kontensoal').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ url('guru/json/kontensoal/'.$soal->id.'') }}',
          columns: [
          { data : 'no_soal', name: 'no_soal'},
          { data: 'kontensoal', name: 'kontensoal'},
          { data: 'jawaban', name: 'jawaban'},
          { data: 'jawaban_benar', name: 'jawaban_benar'},
          { data: 'action', name: 'action', orderable: false, searchable: false },
          ]
        });
    }else{
      var table = $('#kontensoal').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ url('guru/json/kontensoal/'.$soal->id.'') }}',
          columns: [
          // { data: 'id', render: function (data, type, row, meta) 
          //   { 
          //     return meta.row + meta.settings._iDisplayStart + 1; 
          //   }
          // },
          // { data : 'id', name: 'id'},
          { data : 'no_soal', name: 'no_soal'},
          // { data: 'konten_soal', name: 'konten_soal'},
          { data: 'kontensoal', name: 'kontensoal'},
          { data: 'action', name: 'action', orderable: false, searchable: false },
          ]
        });
    }
    
    // function add() {
    //   save_method = "add";
    //   $('input[name=_method]').val('POST');
    //   $('#modal-form').modal('show');
    //   $('#modal-form form')[0].reset();
    //   $('.modal-title').text('Tambah Provinsi');
    // }

    // function edit(id) {
    //   save_method = 'edit';
    //   $('input[name=_method]').val('PATCH');
    //   $('#modal-form form')[0].reset();
    //   $.ajax({
    //     url: "{{ url('guru/provinsi') }}" + '/' + id + "/edit",
    //     type: "GET",
    //     dataType: "JSON",
    //     success: function(data) {
    //       $('#modal-form').modal('show');
    //       $('.modal-title').text('Edit Provinsi');

    //       $('#id').val(data.id);
    //       $('#nama_provinsi').val(data.nama_provinsi);
    //     },
    //     error : function() {
    //       alert("Nothing Data");
    //     }
    //   });
    // }

    function hapus(id){
      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
      }).then(function () {
        $.ajax({
          url : "{{ url('guru/soal/konten_soal') }}" + '/' + id,
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

    // $(function(){
    //   $('#modal-form form').validator().on('submit', function (e) {
    //     if (!e.isDefaultPrevented()){
    //       var id = $('#id').val();
    //       if (save_method == 'add') url = "{{ url('guru/provinsi') }}";
    //       else url = "{{ url('guru/provinsi') . '/' }}" + id;

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
    //});
  </script>
  @endsection