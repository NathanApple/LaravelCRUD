@extends('layout/main')

@section('title', 'New About')

@section('container')

<section>
	<div class="container"> 
	  <h2>Data yang kami sediakan</h2>
	  <p class="text-muted mb-5">Ini data-data </p>
	  <div class="row">
		<div class="col-sm-6 col-lg-4 mb-3">
		  <svg class="lnr text-primary services-icon">
			<use xlink:href="#lnr-magic-wand"></use>
		  </svg>
		  <h6>Nama</h6>
		  <p class="text-muted">Nama siswa</p>
		</div>
		<div class="col-sm-6 col-lg-4 mb-3">
		  <svg class="lnr text-primary services-icon">
			<use xlink:href="#lnr-heart"></use>
		  </svg>
		  <h6>NIS</h6>
		  <p class="text-muted">NIS siswa</p>
		</div>
		<div class="col-sm-6 col-lg-4 mb-3">
		  <svg class="lnr text-primary services-icon">
			<use xlink:href="#lnr-rocket"></use>
		  </svg>
		  <h6>Email</h6>
		  <p class="text-muted">Email siswa</p>
		</div>
	  </div>
	</div>
  </section>
@endsection
