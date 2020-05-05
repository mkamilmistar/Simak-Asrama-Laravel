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
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Catatan Kebaikan & Keburukan Siswa</strong>
                                <a href="/tambah-catatan-kebaikan" class="btn btn-primary">+ Tambah Catatan</a>
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
                                        <td>Budi Arianto Kucing</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>Laki-laki</td>
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
                                        @foreach($catatan_kebaikan as $index => $p)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $p->created_at }}</td>
                                            <td>{{ $p->kegiatan }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                            <td>
                                                <a href="{{ route('updateCatatanKebaikanSiswa', ['id' => $p->id]) }}">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="{{ route('hapusEntriCatatanKebaikanSiswa', ['id' => $p->id]) }}">
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
                                        @foreach($catatan_keburukan as $index => $p)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $p->created_at }}</td>
                                            <td>{{ $p->kegiatan }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                            <td>
                                                <a href="{{ route('updateCatatanKebaikanSiswa', ['id' => $p->id]) }}">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="{{ route('hapusEntriCatatanKebaikanSiswa', ['id' => $p->id]) }}">
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