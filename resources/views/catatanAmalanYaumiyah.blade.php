@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Catatan Amalan Amaliyah</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Amalan Yaumiyah</a></li>
                                        <li><a href="catatan-yaumiyah">Catatan Amalan Yaumiyah Siswa</a></li>
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
                                <strong class="card-title">Catatan Amalan Amaliyah Siswa</strong>
                            </div>
                            <div class="card-body">
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
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Amalan</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Minggu, 12 Maret 2020</td>
                                            <td>Sholat Tahajud</td>
                                            <td>5</td>
                                            <td>Hanya hari senin</td>
                                            <td>
                                                <a href="#">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="#">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minggu, 12 Maret 2020</td>
                                            <td>Sholat Dhuha</td>
                                            <td>3</td>
                                            <td>Hanyar sabtu</td>
                                            <td>
                                                <a href="#">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="#">
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </a>
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