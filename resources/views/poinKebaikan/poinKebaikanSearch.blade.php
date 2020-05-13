@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Poin Pelanggaran dan Kebaikan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('viewPoinSearchPage')}}">Poin Pelanggaran dan Kebaikan</a></li>
                            <li class="active">Cari Siswa</li>
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
                <div class="card-group">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Input Poin Pelanggaran dan Kebaikan</strong>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Masukkan nama siswa</h5>
                            <form action="">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="..." aria-label="..." aria-describedby="button-search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="my-3">
                                <hr />
                            </div>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>Poin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $siswa->user->nama }}</td>
                                        <td>{{ $siswa->kelas }}</td>
                                        <td>{{ $siswa->NIS }}</td>
                                        <td>
                                            @if ($siswa->jumlah_total_poin < 0) <span class="badge badge-danger">{{ $siswa->jumlah_total_poin }}</span>
                                                @else
                                                <span class="badge badge-success">{{ $siswa->jumlah_total_poin }}</span>
                                                @endif
                                        </td>
                                        <td><a href="{{ route('viewPoinSiswaPage', $siswa->user_id) }}" class="btn-sm btn-primary">View</a></td>
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
@endsection