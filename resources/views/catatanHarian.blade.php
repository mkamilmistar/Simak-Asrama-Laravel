@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Catatan Harian</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Harian</a></li>
                                        <li><a href="catatan-yaumiyah">Catatan Harian Siswa</a></li>
                                        <li class="active">Data table</li>
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
                                <strong class="card-title">Catatan Harian Siswa</strong>
                            </div>
                            <div class="card-body">
                                <table class="table-bio">
                                    <tr >
                                        <th style="width: 200px">Tanggal</th>
                                        <td><input type="text" placeholder="12 Maret 2020"></td>
                                    
                                    </tr>
                                </table>
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Pencatat</th>
                                            <th>Waktu Pencatatan</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kus</td>
                                            <td>Minggu, 12 Maret 2020</td>
                                            <td>Budi Arianto</td>
                                            <td>09.30</td>
                                            <td>Prestasi</td>
                                            <td>Membantu Guru</td>
                                            <td>
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bowo</td>
                                            <td>Minggu, 12 Maret 2020</td>
                                            <td>Budi Arianto</td>
                                            <td>09.30</td>
                                            <td>Indisipliner</td>
                                            <td>Tidur di Kelas</td>
                                            <td>
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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