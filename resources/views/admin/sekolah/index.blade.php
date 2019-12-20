<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">

      <div class="container">
        <a href="{{ url('admin/sekolah/create') }}" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <table id="sekolah" class="table table-striped table-bordered" style="width:100%">
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
      ajax: '{{ route('json_sekolah') }}',
      columns: [
      { data: 'id', name: 'id' },
      { data: 'npsn', name: 'npsn' },
      { data: 'jenjang', name: 'jenjang' },
      { data: 'nama_sekolah', name: 'nama_sekolah' },
      { data: 'alamat', name: 'alamat' },
      { data: 'nama_provinsi', name: 'nama_provinsi'},
      { data: 'nama_kabupaten', name: 'nama_kabupaten'},
      { data: 'nama_kecamatan', name: 'nama_kecamatan'},
      { data: 'nama_kelurahan', name: 'nama_kelurahan'},
      { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });
    </script>
  @endsection