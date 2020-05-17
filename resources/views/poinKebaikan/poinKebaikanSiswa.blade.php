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
                            @if(Auth::user()->role !== "siswa")
                                <li><a href="{{ route('viewPoinSearchPage') }}">Poin Pelanggaran dan
                                        Kebaikan</a></li>
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
                    <!-- Pembina View-->
                    <div class="card-header">
                        <strong class="card-title">Poin Pelanggaran dan Kebaikan</strong>
                        @if(Auth::user()->role !== "siswa")
                            <a href="{{ route('addPoinSiswaPage', $siswa->user_id) }}"
                                class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Catatan</a>
                        @endif
                    </div>
                    <!-- End Pembina View-->

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
                                    @if($siswa->jumlah_total_poin < 0)
                                        <label class="badge badge-danger">{{ $siswa->jumlah_total_poin }}</label>
                                    @else
                                        <label class="badge badge-success">{{ $siswa->jumlah_total_poin }}</label>
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <!-- END OF DATA SISWA -->
                        <br>
                        <!-- DATA POIN KEBAIKAN -->
                        <h4><strong>Poin Kebaikan</strong> </h4>
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            @php
                                $counter = 0;
                            @endphp

                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Poin</th>
                                    @if(Auth::user()->role !== "siswa")
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($poin_kebaikan as $poin)
                                    <tr>
                                        <td>{{++$counter}}</td>
                                        <td>{{ $poin->tanggal }}</td>
                                        <td>{{ $poin->keterangan }}</td>
                                        <td>
                                            <label class="badge badge-success">
                                                {{ $poin->poin }}
                                            </label>
                                        </td>
                                        @if(Auth::user()->role !== "siswa")
                                            <td>
                                                <a href="{{ route('updatePoinSiswaPage', $poin->id) }}"
                                                   class="btn btn-primary">
                                                    Update
                                                </a>
                                                <form method="POST"
                                                      action="{{ route('removePoinSiswa', $poin->id) }}"
                                                      id="hapusPoin{{ $poin->id }}">
                                                    @csrf
                                                    <input type="text" hidden name="siswa_id" value={{ $siswa->id }} />
                                                    <input type="submit" class="btn btn-danger" value="Hapus">
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h4><strong>Poin Keburukan</strong> </h4>
                        <!-- DATA POIN KEBURUKAN -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            @php
                                $counter = 0;
                            @endphp

                            <thead>
                                <tr class="table-tengah">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Poin</th>
                                    @if(Auth::user()->role !== "siswa")
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($poin_keburukan as $poin)
                                    <tr>
                                        <td>{{++$counter}}</td>
                                        <td>{{ $poin->tanggal }}</td>
                                        <td>{{ $poin->keterangan }}</td>
                                        <td>
                                            <label class="badge badge-danger">
                                                {{ $poin->poin }}
                                            </label>
                                        </td>
                                        @if(Auth::user()->role !== "siswa")
                                            <td>
                                                <a href="{{ route('updatePoinSiswaPage', $poin->id) }}"
                                                   class="btn btn-primary">
                                                    Update
                                                </a>
                                                <a class="btn btn-danger"
                                                   onclick="$('#hapusPoin{{$poin->id}}').submit()">Hapus</a>
                                                <form method="POST"
                                                      action="{{ route('removePoinSiswa', $poin->id) }}"
                                                      id="hapusPoin{{ $poin->id }}">
                                                    @csrf
                                                    <input type="text" hidden name="siswa_id" value={{ $siswa->id }} />
                                                </form>
                                            </td>
                                        @endif
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