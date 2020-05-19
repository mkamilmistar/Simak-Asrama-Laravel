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
                        <div class="isiCardHeader">
                            @if(Auth::user()->role !== "siswa")
                                <a href="{{ route('addPoinSiswaPage', $siswa->id) }}"
                                    class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Catatan</a>
                            @endif
                            <a href="/poin-siswa/{{ $siswa->id }}/cetak_pdf" class="btn btn-primary"> <i
                                    class="fa fa-print"></i> Export PDF</a>
                        </div>
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
                                        <td>{{ ++$counter }}</td>
                                        <td>{{ $poin->tanggal }}</td>
                                        <td>{{ $poin->keterangan }}</td>
                                        <td>
                                            <label class="badge badge-success">
                                                {{ $poin->poin }}
                                            </label>
                                        </td>
                                        @if(Auth::user()->role !== "siswa")
                                            <td>
                                                <a href="{{ route('updatePoinSiswaPage', $poin->id) }}" class="btn btn-warning"> Edit </a>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#hapusPoin">Hapus</a>
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
                                        <td>{{ ++$counter }}</td>
                                        <td>{{ $poin->tanggal }}</td>
                                        <td>{{ $poin->keterangan }}</td>
                                        <td>
                                            <label class="badge badge-danger">
                                                {{ $poin->poin }}
                                            </label>
                                        </td>
                                        @if(Auth::user()->role !== "siswa")
                                            <td>
                                                <a href="{{ route('updatePoinSiswaPage', $poin->id) }}" class="btn btn-warning"> Edit </a>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#hapusPoin">Hapus</a>
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

<!-- Modal -->
<div class="modal modal-info fade" id="hapusPoin" tabindex="-1" role="dialog" aria-labelledby="modalLabelKu">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="modalLabelKu"> Konfirmasi Hapus Catatan </h4>
            </div>
            <form action=" {{route('removePoinSiswa', $poin->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <p class="text-center">Apakah anda yakin untuk menghapus catatan ini?</p>
                    <input type="text" hidden name="siswa_id" value={{ $siswa->id }} />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ./animated -->
<!-- ./content -->
<div class="clearfix">
</div>
@endsection