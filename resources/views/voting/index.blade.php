@extends('voting.master')
@section('judul','E-voting SMKN 1 KAWALI')
@section('konten')
    <div class="mycontainer" style="overflow-x:hidden">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h2 style="color:#fff;">E-Voting | Daftar Kandidat</h2>
        </div>
    </div>
    <div class="row">
  @foreach($kandidat as $x)
        <div class="col-md-3">
          <div class="card mx-auto mb-5" style="width: 16rem;">
             <img src="{{ asset('foto_kandidat/'.$x->foto)}}" class="card-img-top" alt="Foto" height="250">
                 <div class="card-body text-center">
                  <h5 class="card-title">{{ $x->nama}}</h5>
                  <div class="row">
                      <div class="col"><a href="{{ route('simpansuara',$x->id) }}" class="btn btn-primary mb-1" style="width:100%" onclick="return confirm('Yakin memilih {{ $x->nama}} ?');">Pilih</a></div>
                  </div>
                  <div class="row">
                      <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x->id}}">Lihat Visi Misi</a></div>
                  </div>
         </div>
         </div>
        </div>

        <div class="modal fade" id="modalVisiMisi{{ $x->id }}" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalVisiMisi{{ $x->id }}"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col">Visi</div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <?= $x->visi?>
                    </div>
                  </div>
                <hr>
                <div class="row">
                  <div class="col">Misi</div>
                </div>  
                <div class="row">
                  <div class="col"> <?= $x->misi?> </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        
    

  </div>
    </div>
<!-- Modal -->

@endsection