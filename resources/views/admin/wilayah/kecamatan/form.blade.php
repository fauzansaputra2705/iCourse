
<!-- Modal -->
<div class="modal fade" id="modal-form" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form method="POST">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<h5 class="modal-title" id="modal-title"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id" name="id">

					<div class="form-group">
						<label for="">Nama Provinsi</label>
						<select name="id_provinsi" id="provinsi" class="form-control select2" required>
							@foreach ($provinsi as $key => $p)
								<option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="">Nama Kabupaten</label>
						<select name="kabupaten_id" id="kabupaten_id" class="form-control select2" required>
						</select>
					</div>

					<div class="form-group">
						<label for="">Nama Kecamatan</label>
						<input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
