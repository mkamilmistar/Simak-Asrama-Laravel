@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catatan Amalan Yaumiyah</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/catatan-yaumiyah">Catatan Amalan Yaumiyah</a></li>
                            <li><a href="/catatan-yaumiyah">Catatan Amalan Yaumiyah Siswa</a></li>
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
                        <strong class="card-title">Catatan Amalan Yaumiyah Siswa</strong>
                        <a href="/catatan-yaumiyah/{{ auth()->user()->id }}/create" class="btn btn-primary">+ Tambah
                            Catatan</a>
                    </div>
                    <div class="card-body">
                        <!-- Data Siswa -->
                        <table class="table-bio">
                            <tr>
                                <th style="width: 200px">Nomor Induk Siswa</th>
                                <td>{{ $data_user->siswa->NIS }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $data_user->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $data_user->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $data_user->siswa->kelas }}</td>
                            </tr>
                            <tr>
                                <th>Total Poin Amaliyah</th>
                                <td>{{ $isiTotal }}</td>
                            </tr>
                        </table>
                        <!-- END OF DATA SISWA -->
                        <br>
                        <!-- DATA AMALAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <!-- <th>Tanggal</th> -->
                                    <th>Jenis Amalan</th>
                                    <!-- <th>Jumlah</th> -->
                                    <!-- <th>Keterangan</th> -->
                                    <th>Jumlah</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catatanAmaliyah as $index => $catatan)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <!-- <td>{{ $catatan->tanggal }}</td> -->
                                        <td>{{ $catatan->jenisAmalanYaumiyah->jenisAmalan }}</td>
                                        <!-- <td>5</td> -->
                                        <!-- <td>{{ $catatan->keterangan }}</td> -->
                                        <td>{{ $catatan->jumlah }} kali</td>
                                        <!-- <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href="#">
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </a>
                                        </td> -->
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