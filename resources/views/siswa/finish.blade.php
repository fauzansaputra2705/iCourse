<div class="container">
<table class="table mt-5">
  {{-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> --}}
  <tbody>
	@php
		$benar = 0;
		$no = 0;
	@endphp
  	@foreach ($siswaquiz as $sq)
  	@php
  	if ($sq->jawaban_siswa == $sq->jawaban_benar){
  		$name = $sq->name;
  		$soal = $sq->tag_materi;
		$benar++;
  	}else{
  	}
	$no++
  	@endphp
  	@endforeach
    <tr>
      <th scope="row">Nama Lengkap</th>
      <td>{{ $name }}</td>
    </tr>
    <tr>
      <th scope="row">Nama Soal</th>
      <td>{{ $soal }}</td>
    </tr>
    <tr>
      <th scope="row">Jawaban Benar</th>
      <td>{{ $benar }}</td>
    </tr>
    <tr>
      <th scope="row">Hasil</th>
      <td>{{ $benar*5 }}</td>
    </tr>
  </tbody>
</table>
</div>