
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-lg-9 mb-5">

			{{-- <input type="hidden" name="" id="soal_id" value="{{ $soal->id }}">
			<input type="hidden" name="" id="konten_soal_id" value="{{ $ks->id }}">
			<input type="hidden" name="" id="id_t_siswa" value="">
			<input type="hidden" name="" id="no_soal" value="" > --}}

			<div class="card mb-lg-4" style="border: 2px solid; border-color: #0474c4;">
				<h5 class="card-header bgcolor dark">Soal ke</h5>
				<div class="card-body ">
					<h5 class="card-title"></h5>
					<p class="card-text">{{-- @php echo $ks->konten_soal @endphp --}}</p>

					<p class="card-text">
							{{-- @if ($soal->jenis_soal == "Pilihan Ganda") --}}
							<p>Pilih Salah Satu :</p>
								{{-- @foreach ($jawaban as $jb) --}}
							
									{{-- <input type="hidden" name="" value="{{ $jb->id }}" id="jawaban_soal_id"> --}}
							
									{{-- @if ($jb->no_soal == $ks->no_soal && $jb->konten_soal_id == $ks->id) --}}
										{{-- @php --}}
										$jawab = explode("{{-- Batas JAWABAN --}}",$jb->jawaban)
										{{-- @endphp --}}
							
										{{-- @for ($i = 0; $i < 4; $i++) --}}
							
											<input type="radio" class="magic-radio" value="{{-- {{ $jawab[$i] }} --}}" id="pilgan{{-- {{ $jb->no_soal.$i }} --}}" name="jawaban{{-- {{ $jb->no_soal }} --}}">
											{{-- <label for="pilgan{{ $jb->no_soal.$i }}"> --}}
												{{-- {{ $jawab[$i] }} --}}
											</label>
											<br>
										{{-- @endfor --}}
									{{-- @endif --}}
								{{-- @endforeach --}}
							
								<div class="row" align="center">
									<div class="col-md-4">
										{{-- <input type="button" name="" onclick="clear{{ $ks->no_soal }}()" value="Clear"> --}}
										{{-- @if (!$before_soal == 0) --}}
										{{-- <a href="{{ url('siswa/startquiz/'.$id_soal.'/'.$before_soal.'') }}" onclick="savequiz1()"><label for="">Sebelumnya</label></a> --}}
										{{-- @endif --}}
									</div>
									<div class="col-md-4">
										<div class="checkbox icheck-sunflower ">
										                    			{{-- <input type="checkbox" id="ragu{{ $ks->no_soal }}" onclick="validate{{ $ks->no_soal }}()" /> --}}
										                    			{{-- <label for="ragu{{ $ks->no_soal }}" >Ragu - Ragu</label> --}}
										                			</div>
									</div>
									<div class="col-md-4">
										{{-- @if ($ks->no_soal == $jumlahsoal) --}}
											{{-- <a href="{{ route('finish') }}"><label for="">Finish</label></a> --}}
										{{-- @else --}}
											{{-- <a href="{{ url('siswa/startquiz/'.$id_soal.'/'.$next_soal.'') }}" onclick="savequiz2()"><label for="">Selanjutnya</label></a> --}}
										{{-- @endif --}}
									</div>
								</div>
							
							{{-- @else --}}
								<textarea name="jawaban" id="" cols="10" rows="10" class="form-control"></textarea>
								
								<div class="row">
									<div class="col-md-4">
										{{-- <input type="button" name="" onclick="clear{{ $ks->no_soal }}()" value="Clear"> --}}
									</div>
									<div class="col-md-4">
										<div class="checkbox icheck-sunflower ">
										                    			{{-- <input type="checkbox" id="ragu{{ $ks->no_soal }}" onclick="validate{{ $ks->no_soal }}()" value="true" L/> --}}
										                    			{{-- <label for="ragu{{ $ks->no_soal }}" >Ragu - Ragu</label> --}}
										                			</div>
									</div>
									<div class="col-md-4"></div>
								</div>
							{{-- @endif --}}
					</p>
				</div>
			</div>
				{{-- <script>
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
								if ({{ $ks->no_soal }} == {{ $i }}) {
									$('#no{{ $i }}').css({
										width: 'auto', 
										display: 'inline-block', 
										padding: '13px', 
										border: '2px solid black', 
										color: 'black',
										backgroundColor : '#f1c40f',
									});
								}
							}
						}else{
							if ( {{ $ks->no_soal }} == {{ $i }} ) {
								$('#no{{ $i }}').css({
									width: 'auto', 
									display: 'inline-block', 
									padding: '13px', 
									border: '2px solid black', 
									color: 'black',
									backgroundColor : 'white',
								});
							}
						}
						@endfor
					}
				</script> --}}
		</div>

		<div class="col-lg-3 mb-3">
			<div class="card mb-lg-4" style="border: 2px solid; border-color: #0474c4; border-radius: 1.5%">
				<h5 class="card-header bgcolor dark">Navigasi Quiz</h5>
				<div class="card-body ">
					{{-- <h5 class="card-title"></h5> --}}
					<p class="card-text">
						{{-- @for ($i = 1; $i <= $jumlahsoal; $i++)
						@foreach ($ragu as $rg)
							@if ($rg->no_soal == $i)
								@if ($rg->ragu_ragu == "true")
									@if ($rg->soal_id == $soal->id)
										<style>
											#no{{ $i }}{
												background-color: #f1c40f;
											}
										</style>
									@endif
								@endif
							@endif
						@endforeach

						@if ($no == $i)
						<style>
							#no{{ $i }}{
								width: auto; 
								display: inline-block; 
								padding: 13px; 
								border: 2px solid black; 
								color: black;
								font-weight: bold;
							}
						</style>
						@else
						<style>
							#no{{ $i }}{
								width: auto; 
								display: inline-block; 
								padding: 10px; 
								border: 1px solid black; 
								color: black;
							}
						</style>
						@endif
							
						<a href="{{ url('siswa/startquiz/'.$soal->id.'/'.$i.'') }}" id="no{{ $i }}">{{ $i }}</a>
						@endfor --}}
					</p>
				</div>
			</div>
		</div>

	</div>
</div>

<script>

	
	
</script>
