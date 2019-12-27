<!-- Content
	============================================= -->
	<section id="content" style="overflow: visible;">

		<div class="content-wrap">
      <div class="container">
        <h1>Data Kategori Soal</h1>
        <hr color="black" style="height: 2px;">
      </div>
      <div class="container">
        <a onclick="add()" class="btn btn-primary text-white mb-3"><i class="fas fa-plus text-white"></i> Tambah </a>

        <table id="kategori_soal" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Kategori Soal</th>
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

  @include('admin.soal.kategori_soal.form')

  @section('addscript')
  <script>
    var table = $('#kategori_soal').DataTable({
      processing: true,
      serverSide: true,
      // "scrollX": true,
      ajax: '{{ route('json_kategorisoal') }}',
      columns: [
      { data: 'id', name: 'id'},
      { data: 'kategori_soal', name: 'kategori_soal'},
      { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });


    function add() {
      save_method = "add";
      $('input[name=_method]').val('POST');
      $('#modal-form').modal('show');
      $('#modal-form form')[0].reset();
      $('.modal-title').text('Tambah Kategori Soal');
    }

    function edit(id) {
      save_method = 'edit';
      $('input[name=_method]').val('PATCH');
      $('#modal-form form')[0].reset();
      $.ajax({
        url: "{{ url('admin/kategori_soal') }}" + '/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#modal-form').modal('show');
          $('.modal-title').text('Edit Kategori Soal');

          $('#id').val(data.id);
          $('#kategorisoal').val(data.kategori_soal);
        },
        error : function() {
          alert("Nothing Data");
        }
      });
    }

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
          url : "{{ url('admin/kategori_soal') }}" + '/' + id,
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
          if (save_method == 'add') url = "{{ url('admin/kategori_soal') }}";
          else url = "{{ url('admin/kategori_soal') . '/' }}" + id;

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
  </script>
  @endsection