@extends('dashboard.dashboard')
@section('judul_halaman','Kandidat')
@section('konten')
<?php $judul = 'Kandidat'; ?>
<div class="panel panel-headline">
	<div class="panel-heading">
		<div class="panel-title">
			DETAIL CALON KETUA OSIS
		</div>
		<div class="panel-subtitle">
			Periode : 2019-2020
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6" style="margin-bottom:15px;">
				<a href="javascript:void(0)" onclick="history.back()"class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i>Kembali</a>
			</div>
		</div>
		<div class="panel panel-profile" style="min-height:490px;">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<img src="{{ asset('foto_kandidat/'.$detailkandidat->foto )}}"  width="100%" height="490"  alt="Foto">
									<!-- <div class="profile-main">
										<h3 class="name">Samuel Gold</h3>
										<span class="online-status status-available">Available</span>
									</div> -->
								</div>
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right" style="margin-bottom:-35px;margin-top:-24px;">
								<h3>{{ $detailkandidat->nama }}</h3>
							</div>
							<div class="profile-right">
								<h4 class="heading">Visi & Misi</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-12">
											<h4>Visi</h4>
											<p>{!! $detailkandidat->visi !!}</p>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4>Misi</h4>
											<p>{!! $detailkandidat->misi !!}</p>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="text-right" style="margin-top:20px;margin-bottom:-50px;"><a href="{{ route('admin.kandidat.edit',$detailkandidat->id) }}" class="btn btn-primary">Edit Profile</a></div>
										</div>
									</div>
								</div>
								<!-- END AWARDS -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
	</div>
</div>
@endsection