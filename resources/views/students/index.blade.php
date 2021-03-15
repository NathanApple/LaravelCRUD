@extends('layout/main')

@section('title', 'Detail Students')

@section('container')
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">
    
    <p></p>
    <h1 class="my-3">Daftar Siswa</h1>
    <p> </p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
<p> </p>
    
        <div class="col-md-12 col-md-offset-1">

            <div class="card card-table">
              <div class="card-header">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="card-title">Panel Heading</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a class="btn btn-sm btn-primary" href="students/create">Create New</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>NIS</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr> 
                  </thead>
                  <tbody>
                      @foreach ($students as $st)
                          
                      
                          <tr>
                            <td align="center">
                              <a class="btn btn-primary" href="students/{{$st->id}}"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href=""><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{$loop->iteration}}</td>
                            <td>{{$st->nama}}</td>
                            <td>{{$st->nrp}}</td>
                            <td>{{$st->email}}</td>
                            <td>{{$st->jurusan}}</td>
                          </tr>
                        </tbody>
                        @endforeach
                </table>
            
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col col-xs-4">Students data
                  </div>

                </div>
              </div>
            </div>

</div></div></div>
@endsection