
<section id="content" style="overflow: visible;">

	<div class="content-wrap container">
		<div class="row p-5">

			@foreach ($konten_soal as $ks)
			<div class="col-lg-10">
				<div class="card mb-lg-4" style="border: 2px solid; border-color: #0474c4; border-radius: 1.5%">
					<h5 class="card-header bgcolor dark">Soal ke {{ $ks->no_soal }}</h5>
					<div class="card-body ">
						<h5 class="card-title"></h5>
						<p class="card-text">{!! $ks->konten_soal !!}</p>

						<p class="card-text">
							@if ($soal->jenis_soal == "Pilihan Ganda")
								@foreach ($jawaban as $jb)
									@if ($jb->no_soal == $ks->no_soal && $jb->konten_soal_id == $ks->id)
										@php
										$jawab = explode("{{-- Batas JAWABAN --}}",$jb->jawaban)
										@endphp

										@for ($i = 0; $i < 4; $i++)
											{{-- <input type="radio" value="" id="{{ $jb->no_soal.$i }}" class="magic-radio" name="jawaban{{ $jb->no_soal }}" disabled @if ($jb->jawaban_benar == $jawab[$i]) checked @endif> --}}
											<input type="radio" value=""  id="{{ $jb->no_soal.$i }}" name="jawaban{{ $jb->no_soal }}" disabled @if ($jb->jawaban_benar == $jawab[$i]) checked @endif>

											@if ($jb->jawaban_benar == $jawab[$i])
												<label for="{{ $jb->no_soal.$i }}">
													<b><i>{{ $jawab[$i] }}</i></b>
												</label>
											@else
												<label for="{{ $jb->no_soal.$i }}">
													{{ $jawab[$i] }}
												</label>
											@endif
										
											<br>
										@endfor
										
									@endif
								@endforeach
							@endif
						</p>
							{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
						</div>
					</div>
				</div>
				@endforeach
			</div>
		<a href="{{ url('admin/soal/') }}" class="btn btn-danger float-right">Kembali</a>
		</section>