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
                            @if (Auth::user()->role !== "siswa")
                            <li><a href="{{route('viewPoinSearchPage')}}">Poin Pelanggaran dan Kebaikan</a></li>
                            @else
                            <li><a href="#">Poin Pelanggaran dan Kebaikan</a></li>
                            @endif
                            <li class="active">{{ $siswa->user->nama }}</li>
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
                        <strong class="card-title">Poin Pelanggaran dan Kebaikan</strong>
                        @if (Auth::user()->role !== "siswa")
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Catatan</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <!-- Data Siswa -->
                        <table class="table-bio">
                            <tr>
                                <th style="width: 200px">Nomor Induk Siswa</th>
                                <td>{{ $siswa->NIS }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $siswa->user->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $siswa->user->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $siswa->kelas }}</td>
                            </tr>
                            <tr>
                                <th>Total Poin</th>
                                <td>
                                    @if ($siswa->jumlah_total_poin < 0) <label class="badge badge-danger">{{ $siswa->jumlah_total_poin }}</label>
                                        @else
                                        <label class="badge badge-success">{{ $siswa->jumlah_total_poin }}</label>
                                        @endif
                                </td>
                            </tr>
                        </table>
                        <!-- END OF DATA SISWA -->
                        <br>
                        <!-- DATA POIN KEBAIKAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Poin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poin_kebaikan as $poin)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $poin->tanggal }}</td>
                                    <td>{{ $poin->keterangan }}</td>
                                    <td>
                                        <label class="badge badge-success">
                                            {{ $poin->poin }}
                                        </label>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('removePoinSiswa', $poin->id) }}" id="hapusPoin{{ $poin->id }}">
                                            @csrf
                                            <input type="text" hidden name="siswa_id" value={{ $siswa->id }}/>
                                            <input type="submit" class="btn btn-danger" value="Hapus">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- DATA POIN KEBAIKAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Poin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poin_keburukan as $poin)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $poin->tanggal }}</td>
                                    <td>{{ $poin->keterangan }}</td>
                                    <td>
                                        <label class="badge badge-danger">
                                            {{ $poin->poin }}
                                        </label>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('removePoinSiswa', $poin->id) }}" id="hapusPoin{{ $poin->id }}">
                                            @csrf
                                            <input type="text" hidden name="siswa_id" value={{ $siswa->id }}/>
                                            <input type="submit" class="btn btn-danger" value="Hapus">
                                        </form>
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