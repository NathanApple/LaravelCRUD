@extends('layout/main')

@section('title', 'Form Tambahan Data')

@section('container')

<div class="container mt-5">
	<div class="row">
		<div class="col-10">		
        <h1>Add New Student!</h1>
            <form method="POST" action="/students">
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NIS</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="NIS" name="nrp" value="{{old('nrp')}}">
                    @error('nrp') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{old('email')}}">
                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="jurusan" name="jurusan" value="{{old('jurusan')}}">
                    @error('jurusan') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>
@endsection
