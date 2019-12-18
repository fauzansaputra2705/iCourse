
<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

					<label for="">Nama Provinsi</label>
					<select name="" id="provinsi" class="form-control" required>
						@foreach ($provinsi as $p)
							<option value="{{ $p->id }}">{{ $p->nama_provinsi }}</option>
						@endforeach
					</select>

					<label for="">Nama Kabupaten</label>
					<select name="kabupaten_id" id="kabupaten" class="form-control" required>
						@foreach ($kabupaten as $k)
							@foreach ($provinsi as $p)
								@if ($k->provinsi_id == $p->id)
								<option value="{{ $k->provinsi_id }}">{{ $k->nama_kabupaten }}</option>
								@endif
							@endforeach
						@endforeach
					</select>

					<label for="">Nama Kecamatan</label>
					<input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
