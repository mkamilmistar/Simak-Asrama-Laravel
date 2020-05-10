@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Catatan Kebaikan & Keburukan</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Kebaikan & Keburukan</a></li>
                                        <li class="active">Catatan Kebaikan & Keburukan Siswa</li>
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
                                <strong class="card-title">Catatan Kebaikan & Keburukan Siswa</strong>
                                <!-- <a href="/catatan-kebaikan/{{auth()->user()->id}}/create" class="btn btn-primary">+ Tambah Catatan</a> -->
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                              
                                <!-- END OF DATA SISWA -->
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
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm" onClick="return confirm('Yakin untuk menghapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- END OF DATA SISWA -->
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <h4><strong>Catatan Keburukan</strong> </h4>
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Kebaikan</th>
                                            <th style="width: 200px">Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($catatanKeburukan as $index => $buruk)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$buruk->created_at->format('d/m/Y')}}</td>
                                            <td>{{$buruk->kegiatan}}</td>
                                            <td>{{$buruk->keterangan}}</td>
                                            <td>
                                                <a href="#">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="#">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </a>
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
@endsection