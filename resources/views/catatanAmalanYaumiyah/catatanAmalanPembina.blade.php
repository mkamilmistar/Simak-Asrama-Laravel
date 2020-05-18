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
                        <a href="/jenis-amalan" class="btn btn-primary">Jenis Amalan</a>
                    </div>
                    <div class="card-body">
                        <!-- Data Siswa -->

                        <!-- END OF DATA SISWA -->
                        <br>
                        <!-- DATA AMALAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>NIM</th>
                                    <th>Jumlah Bobot</th>
                                    <th>Aksi</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_user as $user)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="/profile/{{ $user->id }}/view">{{ $user->nama }}</a>
                                        </td>
                                        <td>{{ $user->siswa['kelas'] }}</td>
                                        <td>{{ $user->siswa['NIS'] }}</td>
                                        <td>{{ $poin }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Lihat Catatan</button>
                                        </td>
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