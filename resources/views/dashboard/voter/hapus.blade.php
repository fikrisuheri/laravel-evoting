@extends('dashboard.dashboard')
@section('judul_halaman','Voters')
@section('konten')
<?php $judul = 'Voters'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">Hapus Akun Voting Pilketos</div>
			<div class="panel-subtitle">Periode : 2019-2020</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<a href="javascript:void(0)" onclick="history.back()" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
      <div class="row" style="margin-top:15px;margin-bottom:18px;">
        <div class="col-md-4">
          <form method="post" action="{{ route('admin.voters.delete') }}">
            {{ csrf_field() }}
            <select class="form-control" name="kriteria">
				<option value="-">Kriteria Hapus</option>
				<option value="0">Semua</option>
				<option value="1">Sudah Voting</option>
				<option value="2">Belum Voting</option>
			</select>
			<br>
 	<button class="btn btn-primary" type="submit">Hapus</button>
            </form>
         
          </div>
        </div>
		</div>
		</div>
@endsection
