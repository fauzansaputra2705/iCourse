
<section id="content" style="overflow: visible;">

    <div class="content-wrap container">
        @foreach ($kategori_soal as $ks)
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{ $ks->id }}">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $ks->id }}" aria-expanded="false" aria-controls="collapse{{ $ks->id }}">
                            {{ $ks->kategori_soal }}
                        </a>
                    </h4>
                </div>
                <div id="collapse{{ $ks->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{ $ks->id }}">
                    <div class="panel-body">


                        {{-- pilihan ganda --}}
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingpilihanganda{{ $ks->id }}">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapspilihanganda{{ $ks->id }}" aria-expanded="false" aria-controls="collapspilihanganda{{ $ks->id }}">
                                            Pilihan Ganda
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapspilihanganda{{ $ks->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingpilihanganda{{ $ks->id }}">
                                    <div class="panel-body">
                                        @foreach ($soalall as $soal)
                                        @if ($soal->jenis_soal == "Pilihan Ganda")
                                        @if ($ks->id == $soal->kategori_soal_id)
                                        <div class="list-group">
                                          <a href="#" class="list-group-item list-group-item-action list-group-item-info " data-toggle="modal" data-target="#Modal{{ $soal->id }}{{ $ks->id }}">{{ $soal->tag_materi }}</a>
                                      </div>
                                      @endif
                                      @endif
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>


                      {{-- essay --}}
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingessay{{ $ks->id }}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseesay{{ $ks->id }}" aria-expanded="false" aria-controls="collapseesay{{ $ks->id }}">
                                        Essay
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseesay{{ $ks->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingessay{{ $ks->id }}">
                                <div class="panel-body">
                                    @foreach ($soalall as $soal)
                                    @if ($soal->jenis_soal == "Essay")
                                    @if ($ks->id == $soal->kategori_soal_id)
                                    <div class="list-group">
                                      <a href="#" class="list-group-item list-group-item-action list-group-item-info " data-toggle="modal" data-target="#Modal{{ $soal->id }}{{ $ks->id }}">{{ $soal->tag_materi }}</a>
                                  </div>
                                  @endif
                                  @endif
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  {{-- modal --}}
  @foreach ($soalall as $soal)
  <div class="modal fade" id="Modal{{ $soal->id }}{{ $ks->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">@if ($soal->kategori_soal_id == $ks->id){{ $ks->kategori_soal }}@endif</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
    <form action="{{ route('start') }}" method="post">
      <div class="modal-body">
        @csrf
        <input type="hidden" name="soal_id" value="{{ $soal->id }}">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque minima eligendi sed sapiente? Consequatur corporis mollitia tenetur, porro delectus voluptates magnam eius aperiam. Deserunt vel doloribus quis eligendi reiciendis.</p>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Start Test</button>
        {{-- <a href="{{ url('siswa/startquiz/'.$soal->id.'/1') }}" class="btn btn-primary">Start test</a> --}}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </form>
</div>
</div>
</div>
@endforeach
@endforeach
</div>
</section>
