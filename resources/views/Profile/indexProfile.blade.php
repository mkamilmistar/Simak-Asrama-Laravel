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
                                <strong class="card-title">Data Siswa</strong>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Data Siswa
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($data_user as $user)
                                            <td><a href="/profile/{{$user->id}}/view">{{$user -> nama}}</a></td>
                                            <td>{{$user -> role}}</td>
                                            <td>{{$user -> username}}</td>
                                            <td>{{$user -> email}}</td>
                                            <td>
                                                <a href="/profile/{{$user -> id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/profile/{{$user -> id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin untuk menghapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- END OF DATA SISWA -->
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

    
<!-- Modal Tambah Data Siswa-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="/profile/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="Role">Role</label>
                <select class="form-control" id="role">
                    <option value="pembina">Pembina</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="user_image">Avatar</label>
                <input type="file" name="user_image" class="form-control">
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button> 
            </div>
        </form>
    </div>
</div>
</div>

@endsection