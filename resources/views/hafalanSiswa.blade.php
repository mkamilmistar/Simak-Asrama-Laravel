@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Hafalan Al-Qur'an</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Hafalan Al-Qur'an</a></li>
                                        <li><a href="/catatan-yaumiyah">Record Hafalan Siswa</a></li>
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
                                <strong class="card-title">Record Hafalan Siswa</strong>
                                <a href="#" class="btn btn-primary">Cetak</a>
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
                                    <thead>
                                        <tr class="table-tengah">
                                            <th rowspan = "2">No</th>
                                            <th rowspan = "2">Tanggal</th>
                                            <th rowspan = "2">P/M</th>
                                            <th rowspan = "2">Q/H</th>
                                            <th colspan = "2">Tahfidz</th>
                                            <th colspan = "2">Muroja'ah</th>
                                            <th rowspan = "2">Nilai</th>
                                            <th rowspan = "2">Pemeriksa</th>
                                        </tr>
                                        <tr class="table-tengah">
                                            <th>Surat</th>
                                            <th>Ayat</th>
                                            <th>Surat</th>
                                            <th>Ayat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Minggu, 12 Maret 2020</td>
                                            <td>P</td>
                                            <td>Q</td>
                                            <td>Contoh</td>
                                            <td>Contoh</td>
                                            <td></td>
                                            <td></td>
                                            <td>9</td>
                                            <td>Alif Hanif P</td>
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