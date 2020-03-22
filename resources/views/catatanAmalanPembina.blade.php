@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Catatan Amalan Yaumiyah Pembina</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-pembina">Catatan Amalan Yaumiyah</a></li>
                                        <li><a href="/catatan-pembina">Catatan Amalan Yaumiyah Pembina</a></li>
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
                                <strong class="card-title">Catatan Amalan Yaumiyah Pembina</strong>
                                <a href="/jenis-amalan-siswa" class="btn btn-primary">Jenis Amalan</a>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                <table class="table-bio">
                                    <tr >
                                        <th style="width: 200px">Nomor Induk Siswa</th>
                                        <td><input class="form-control"  type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><input class="form-control"  type="text"></td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>
                                        <select class="form-control" id="kondisi">
                                            <option>IX-A</option>
                                            <option>IX-B</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button class="btn btn-primary">Cari</button></td>
                                    </tr>
                                </table>
                                <!-- END OF DATA SISWA -->
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jumlah Bobot</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1111111</td>
                                            <td>
                                                <a href="/budi-arianto">Budi Arianto Kucing</a> 
                                            </td>
                                            <td>IX-A</td>
                                            <td>250</td>
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
                                            <td>0000000</td>
                                            <td>Budi Arianto Kucing</td>
                                            <td>IX-B</td>
                                            <td>250</td>
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