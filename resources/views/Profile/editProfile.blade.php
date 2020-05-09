@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Biodata Siswa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Data Siswa</a></li>
                                        <li class="active">Data Siswa</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>    
    @include('layouts.allert')
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Data Siswa</strong>
                                <!-- Button trigger modal -->
                                
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                
                                <br>
                                <form action="/profile/{{$user->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$user->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Role">Role</label>
                                        <select class="form-control" id="role">
                                            <option value="pembina" @if($user->role=='pembina') selected @endif>Pembina</option>
                                            <option value="siswa" @if($user->role=='siswa') selected @endif>Siswa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username" value="{{$user->username}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email" value="{{$user->email}}">
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-warning">Update</button> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>

@endsection