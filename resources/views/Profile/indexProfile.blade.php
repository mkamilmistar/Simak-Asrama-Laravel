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
                                <strong class="card-title">Data User</strong>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                + Tambah Data User
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <h4><strong>Data Siswa</strong> </h4>
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIS</th>
                                            <th>Kelas</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($data_siswa as $index => $user)
                                            <td>{{$index + 1}}</td>
                                            <td><a href="/profile/{{$user->id}}/view">{{$user -> nama}}</a></td>
                                            <td>{{$user -> siswa['NIS']}}</td>
                                            <td>{{$user -> siswa['kelas']}}</td>
                                            <td>{{$user -> username}}</td>
                                            <td>{{$user -> email}}</td>
                                            <td>
                                                <!-- <a href="/profile/{{$user -> id}}/edit" class="btn btn-primary btn-sm">Edit</a> -->
                                                <a href="/profile/{{$user -> id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/profile/{{$user -> id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin untuk menghapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <h4><strong>Data Guru</strong> </h4>
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($data_guru as $index => $user)
                                            <td>{{$index + 1}}</td>
                                            <td><a href="/profile/{{$user->id}}/view">{{$user -> nama}}</a></td>
                                            <td>{{$user -> username}}</td>
                                            <td>{{$user -> email}}</td>
                                            <td>
                                                <!-- <a href="/profile/{{$user -> id}}/edit" class="btn btn-primary btn-sm">Edit</a> -->
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
                <select name="role" class="form-control" id="role">
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
                <label for="NIS">NIS</label>
                <input name="NIS" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input name="tempat_lahir" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input name="tanggal_lahir" type='text' class='datepicker-here form-control' data-language='en' />
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="form-group">
                <label for="Kelas">Kelas</label>
                <input name="kelas" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="email">Gedung asrama</label>
                <input name="gedung_asrama" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="email">Kamar ID</label>
                <input name="kamar_id" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan Email">
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