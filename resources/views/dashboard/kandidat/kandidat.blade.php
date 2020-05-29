@extends('dashboard.dashboard')
@section('judul_halaman','Kandidat')
@section('konten')
<?php $judul = 'Kandidat'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">E-Voting | Kandidat</div>
			<div class="panel-subtitle">Periode : 2019-2020</div>
		</div>
		<div class="panel-body" style="margin-bottom:20px;">
				<div class="row">
					<div class="col-md-5">
						<a href="{{ route('admin.kandidat.tambah') }}" class="btn btn-primary"><i class="fa fa-fw fa-user-plus"></i> Tambah Kandidat</a>
					</div>
				</div>
				<div class="row">
					<!-- TAMPILKAN DATA KANDIDAT -->
				@foreach($kandidat as $key)
				<div class="col-md-4">
					<div class="kartu">
					  <img src="{{ asset('foto_kandidat/'.$key->foto)}}" class="card-img-top" width="242" height="250" alt="...">
					  <div class="card-body">
					    <h4 class="card-title text-center">{{ $key->nama }}</h4>
					    <div class="row">
					    	<div class="col text-center">
					    		<a href="{{ route('admin.kandidat.detail',$key->id) }}" class="btn btn-primary" style="width:115px;">Detail</a>
					    		<a href="{{ route('admin.kandidat.hapus',$key->id) }}" class="btn btn-danger" style="width:115px;" onclick="return confirm('Hapus data ?');">Hapus</a>
					    	</div>
					    </div>
					  </div>
					</div>

				</div>
				@endforeach
			</div>

			
		</div>
@endsection