
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-lg-9 mb-5">
			@foreach ($konten_soal as $ks)
			<div class="card mb-lg-4" style="border: 2px solid; border-color: #0474c4;">
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

											<input type="radio" class="magic-radio" value="" id="{{ $jb->no_soal.$i }}" name="jawaban{{ $jb->no_soal }}">
											<label for="{{ $jb->no_soal.$i }}">
												{{ $jawab[$i] }}
											</label>
											<br>
										@endfor
									@endif
								@endforeach

								<div class="row">
									<div class="col-md-4">
										{{-- <input type="button" name="" onclick="clear{{ $ks->no_soal }}()" value="Clear"> --}}
									</div>
									<div class="col-md-4">
										<div class="checkbox icheck-sunflower ">
			                    			<input type="checkbox" id="ragu{{ $ks->no_soal }}" onclick="validate{{ $ks->no_soal }}()"/>
			                    			<label for="ragu{{ $ks->no_soal }}" >Ragu - Ragu</label>
			                			</div>
									</div>
									<div class="col-md-4"></div>
								</div>

							@else
								<textarea name="jawaban" id="" cols="10" rows="10" class="form-control"></textarea>
								
								<div class="row">
									<div class="col-md-4">
										{{-- <input type="button" name="" onclick="clear{{ $ks->no_soal }}()" value="Clear"> --}}
									</div>
									<div class="col-md-4">
										<div class="checkbox icheck-sunflower ">
			                    			<input type="checkbox" id="ragu{{ $ks->no_soal }}" onclick="validate{{ $ks->no_soal }}()"/>
			                    			<label for="ragu{{ $ks->no_soal }}" >Ragu - Ragu</label>
			                			</div>
									</div>
									<div class="col-md-4"></div>
								</div>
							@endif
					</p>
				</div>
			</div>
				<script>
					// function clear{{ $ks->no_soal }}(){
					// 	@foreach ($jawaban as $jb)
					// 		if ($('#jawaban{{ $jb->no_soal }}').prop('checked', true)) {
					// 			$('#jawaban{{ $jb->no_soal }}').prop("checked",false);
					// 		}
					// 	@endforeach
					// }

					function validate{{ $ks->no_soal }}(){

						@for ($i = 1; $i <= $jumlahsoal; $i++)
						if($('#ragu{{ $ks->no_soal }}').prop('checked')){
							if ( {{ $ks->no_soal }} == {{ $i }} ) {
								$('#no{{ $i }}').css({
									width: 'auto', 
									display: 'inline-block', 
									padding: '10px', 
									border: '1px solid #f1c40f', 
									color: 'black',
									backgroundColor : '#f1c40f',
								});
							}
						}else{
							if ( {{ $ks->no_soal }} == {{ $i }} ) {
								$('#no{{ $i }}').css({
									width: 'auto', 
									display: 'inline-block', 
									padding: '10px', 
									border: '1px solid black', 
									color: 'black',
									backgroundColor : 'white',
								});
							}
						}
						@endfor
					}
				</script>
			@endforeach	
		</div>

		<div class="col-lg-3 mb-3">
			<div class="card mb-lg-4" style="border: 2px solid; border-color: #0474c4; border-radius: 1.5%">
				<h5 class="card-header bgcolor dark">Navigasi Quiz</h5>
				<div class="card-body ">
					{{-- <h5 class="card-title"></h5> --}}
					<p class="card-text">
						@for ($i = 1; $i <= $jumlahsoal; $i++)
						<a href="#" id="no{{ $i }}" style="width: auto; display: inline-block; padding: 10px; border: 1px solid black; color: black;">{{ $i }}</a>
						@endfor
					</p>
				</div>
			</div>
		</div>

	</div>
</div>

		
