
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

					<div class="form-group">
						<label for="">Kategori Soal</label>
						<select name="kategori_soal_id" id="kategori_soal_id" class="form-control">
							<option>Pilih Kategori Soal</option>
							@foreach ($kategorisoal as $ks)
								<option value="{{ $ks->id }}">{{ $ks->kategori_soal }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="">Jenis Soal</label>
						<select name="jenis_soal" id="jenis_soal" class="form-control">
							<option>Pilih Jenis Soal</option>
							<option value="Pilihan Ganda"> Pilihan Ganda</option>
							<option value="Essay">Essay</option>
						</select>
					</div>

					<div class="form-group">
						<label for="">TAG Materi</label>
						<input type="text" name="tag_materi" id="tag_materi" value="" placeholder="" class="form-control">
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
