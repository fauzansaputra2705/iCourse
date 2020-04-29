<section id="content" style="overflow: visible;">

	<div class="content-wrap container">
		@foreach ($kategori_soal as $ks)
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $ks->id }}" aria-expanded="false" aria-controls="collapse{{ $ks->id }}">
							{{ $ks->kategori_soal }}
						</a>
					</h4>
				</div>
				<div id="collapse{{ $ks->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						<table class="table table-bordered">	
							<thead class="thead-light">
								<tr>
									<th>Nama Siswa</th>
									<th>Nilai Tugas</th>
									<th>Nilai Ujian</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>3</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>