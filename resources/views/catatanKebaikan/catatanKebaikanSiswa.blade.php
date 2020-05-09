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
                                <a href="/catatan-kebaikan/create" class="btn btn-primary">+ Tambah Catatan</a>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                <table class="table-bio">
                                    <tr >
                                        <th style="width: 200px">Nomor Induk Siswa</th>
                                        <td>000000</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{$user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$user->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>IX-B</td>
                                    </tr>
                                </table>
                                <!-- END OF DATA SISWA -->
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <h4><strong>Catatan Kebaikan</strong> </h4>
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
                                        @foreach($catatanKebaikan as $index => $baik)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$baik->created_at->format('d/m/Y')}}</td>
                                            <td>{{$baik->kegiatan}}</td>
                                            <td>{{$baik->keterangan}}</td>
                                            <td>
                                                <a href="/catatan-kebaikan/{{$baik->id}}/edit">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="/catatan-kebaikan/{{$baik->id}}/delete" onClick="return confirm('Yakin untuk menghapus?')">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </a>
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