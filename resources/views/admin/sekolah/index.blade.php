<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">
      <div class="container">
        <h1>Data Sekolah</h1>
        <hr color="black" style="height: 2px;">
      </div>
      <div class="container">
        <a href="{{ url('admin/sekolah/create') }}" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <table id="sekolah" class="table table-striped table-bordered display nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>NPSN</th>
              <th>Jenjang</th>
              <th>Nama Sekolah</th>
              <th>Alamat</th>
              <th>Nama Kelurahan</th>
              <th>Nama Kecamatan</th>
              <th>Nama Kabupaten</th>
              <th>Nama Provinsi</th>
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

  @section('addscript')
  <script>
    var table = $('#sekolah').DataTable({
      processing: true,
      serverSide: true,
      "scrollX": true,
      ajax: '{{ route('json_sekolah') }}',
      columns: [
      { data: 'id', name: 'id'},
      { data: 'npsn', name: 'npsn'},
      { data: 'jenjang', name: 'jenjang'},
      { data: 'nama_sekolah', name: 'nama_sekolah'},
      { data: 'alamat', name: 'alamat'},
      { data: 'nama_kelurahan', name: 'nama_kelurahan'},
      { data: 'nama_kecamatan', name: 'nama_kecamatan'},
      { data: 'nama_kabupaten', name: 'nama_kabupaten'},
      { data: 'nama_provinsi', name: 'nama_provinsi'},
      { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });


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
          url : "{{ url('admin/sekolah') }}" + '/' + id,
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
  </script>
  @endsection