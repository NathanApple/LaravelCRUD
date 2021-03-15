@extends('layout/main')

@section('title', 'Daftar Students')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-10">		
        <h1>Daftar Students!</h1>
        <a href="students/create" class="btn btn-primary my-3">Create new Student</a>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($students as $mhs)      
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nrp}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                    <a href="students/{{$mhs->id}}" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
		</div>
	</div>
</div>
@endsection
