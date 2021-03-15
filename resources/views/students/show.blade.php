@extends('layout/main')

@section('title', 'Detail Students')

@section('container')

<div class="container">
	<div class="row mt-5">
		<div class="col-10">		
        <h1>Daftar Students!</h1>
            <div class="card" style="">
            <div class="card-body">
              <h5 class="card-title">{{$student->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
            <p class="card-text">{{$student->email}}</p>
            <p class="card-text">{{$student->jurusan}}</p>
            <a class="btn btn-primary" href="{{$student->id}}/edit">Edit</a>
            <form action="{{$student->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger">Delete</button>
            </form>
              <a href="{{url('/students')}}" class="card-link">Kembali</a>
            </div>
          </div>
		</div>
	</div>
</div>
@endsection
