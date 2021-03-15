@extends('layout/main')

@section('title', 'Change student Data')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-10">		
        <h1>Edit Student Profile!</h1>
            <form method="POST" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{$student->nama}}">
                    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NIS</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="nrp" name="nrp" value="{{$student->nrp}}">
                    @error('nrp') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{$student->email}}">
                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="jurusan" name="jurusan" value="{{$student->jurusan}}">
                    @error('jurusan') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
		</div>
	</div>
</div>
@endsection
