@extends('layouts.app')

@section('content')
@if(auth()->user()->role=='siswa')
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
                                <li><a href="/catatan-harian">Catatan Harian</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        @if(session('sukses'))
            <div class="alert alert-warning" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Catatan Harian Siswa</strong>
                        </div>
                        <div class="card-body">
                        <a href="/catatan-harian/cetak_pdf/{{$siswa->user_id}}" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Export to PDF</a>
                            <br><br>
                            <table class="table-bio">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $data_siswa->nama }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Nomor Induk Siswa</th>
                                    <td>{{ $siswa->NIS }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $data_siswa->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>{{ $siswa->kelas }}</td>
                                </tr>
                            </table>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama Pencatat</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($catatanHarian as $index => $cat)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><a href="/profile/{{ $cat->pembina_id }}/view">{{ App\User::find($cat->pembina_id)->nama }}
                                                </td>
                                                <td>{{ $cat->kategori }}</td>
                                                <td>{{ $cat->deskripsi }}</td>
                                                <td>{{ Str::limit($cat->waktu, 10, "") }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
@endif
@endsection