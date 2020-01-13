<section id="content" style="overflow: visible;">

	<div class="content-wrap container">
		<div class="row p-5">

			@foreach ($konten_soal as $ks)
			<div class="col-lg-10">
				<div class="card mb-lg-4">
					<h5 class="card-header">Soal ke {{ $ks->no_soal }}</h5>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text">{!! $ks->konten_soal !!}</p>
						<p class="card-text"></p>
						{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</section>