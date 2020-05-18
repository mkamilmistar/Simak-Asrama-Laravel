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
                                        <li><a>Hafalan Al-Qur'an dan Hadist</a></li>
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
                                <strong class="card-title">Record Hafalan Quran Siswa</strong>
                                <a href="/hafalan-pembina/{{$data_user->id}}/tambah-hafalan" class="btn btn-primary">+ Tambah Hafalan</a>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                <table class="table-bio">
                                    <tr >
                                        <th style="width: 200px">Nomor Induk Siswa</th>
                                        <td>{{$data_user->siswa->NIS}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{$data_user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$data_user->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>{{$data_user->siswa->kelas}}</td>
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
                                            <th rowspan = "2">T/M</th>
                                            <th rowspan = "2">Surat</th>
                                            <th colspan = "2">Ayat</th>
                                            <th rowspan = "2">Nilai</th>
                                            <th rowspan = "2">Pemeriksa</th>
                                            <th rowspan = "2">Aksi</th>
                                        </tr>
                                        <tr class="table-tengah">
                                            <th>Dari</th>
                                            <th>Sampai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_hafalan as $index => $haf)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$haf->tanggal}}</td>
                                            <td>{{$haf->pm}}</td>
                                            <td>{{$haf->tm}}</td>
                                            <td>{{$haf->surat->surat_id}}</td>
                                            <td>{{$haf->ayat0}}</td>
                                            <td>{{$haf->ayat1}}</td>
                                            <td>{{$haf->nilai}}</td>
                                            <td>{{$haf->guru->user->nama}}</td>
                                            <td>
                                            <a href="hafalan-pembina/{{$data_user->id}}/#">
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
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Record Hafalan Doa dan Hadist</strong>
                                <a href="/hafalan-pembina/{{$data_user->id}}/tambah-doa" class="btn btn-primary">+ Tambah Hafalan</a>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                <!-- END OF DATA SISWA -->
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th rowspan = "2">No</th>
                                            <th rowspan = "2">Tanggal</th>
                                            <th rowspan = "2">P/M</th>
                                            <th rowspan = "2">Doa</th>
                                            <th rowspan = "2">Hadist</th>
                                            <th rowspan = "2">Nilai</th>
                                            <th rowspan = "2">Pemeriksa</th>
                                            <th rowspan = "2">Aksi</th>
                                        </tr>
                                        <tr class="table-tengah">
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_hafalan2 as $index => $haf2)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$haf2->tanggal}}</td>
                                            <td>{{$haf2->pm}}</td>
                                            <td>{{$haf2->doa}}</td>
                                            <td>{{$haf2->hadist}}</td>
                                            <td>{{$haf2->nilai}}</td>
                                            <td>{{$haf2->guru->user->nama}}</td>
                                            <td>
                                            <a href="hafalan-pembina/{{$data_user->id}}/#">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href="hafalan-pembina/{{$data_user->id}}/#">
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