@extends('layout/main')

@section('title', 'Home')
	

@section('container')
	
<section class="bg-light">
	<div class="container"> 
	  <div class="row">
		<div class="col-lg-6 order-2 order-lg-1">
		  <h1>Cek Seluruh Data Siswa Telkom</h1>
		  <p class="lead">Website ini dirancang sebagai bagian dari tugas praktek pada SMK Telkom Jakarta. Semoga saya mendapat nilai yang terbaik.</p>
		  <p><a href="{{url('/students')}}" class="btn btn-outline-primary">Cek data sekarang</a></p>
		</div>
		<div class="col-lg-6 order-1 order-lg-2"><img src="{{url("/image/image.jpg")}}" alt="..." class="img-fluid"></div>
	  </div>
	</div>
  </section>
@endsection
