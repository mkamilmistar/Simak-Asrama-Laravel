@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Table</a></li>
                                        <li class="active">Data table</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>  
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="dekorjudul">
                        <div class="judul">
                            <!-- isi dengan judul kalau ada -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="samping">
                            <a class="fa fa-paperclip"></a>
                            <div class="jarak">
                                <h4 class="box-title-3">Pengumuman/peringatan </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card-body">
                                
                                <div id="traffic-chart" class="traffic-chart">
                                    Pusing
                                </div>
                            </div>
                        </div>
                    
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        
</div>
{{-- <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
    
                    <div class="card">
                        <div class="dekorjudul">
                            <div class="judul">
                                <!-- isi dengan judul kalau ada -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="samping">
                                <a class="fa fa-user"></a>
                                <div class="jarak">
                                    <h4 class="box-title-3">Ringkasan Siswa</h4>
                                </div>
                            </div>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="table-tengah">
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>Jumlah Catatan Amalan Yaumiah</th>
                                        <th>Jumlah Catatan Sholat</th>                                                                                        
                                        <th>Jumlah Catatan Kebaikan</th>
                                        <th>Jumlah Catatan Keburukan</th>
                                        <th>Jumlah Prestasi Catatan Harian</th>
                                        <th>Jumlah Indisipliner Catatan Harian</th>
                                        <th>Poin Pelanggaran dan Kebaikan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_user as $index => $user)
                                        <tr>
                                            <td>{{ $index +1 }}</td>
                                            <td><a href="/profile/{{ $user->id }}/view">{{ $user->nama }}</td>
                                            <td>{{ $user->siswa->kelas}}</td>
                                            <td>{{ $user->siswa->NIS }}</td>
                                            <td>NULL</td>
                                            <td>NULL</td>
                                            <td>{{ $user->catatanKebaikan->count() }}</td>
                                            <td>{{ $user->catatanKeburukan->count() }}</td>
                                            <td>{{ $user->catatanHarianP->count() }}</td>
                                            <td>{{ $user->catatanHarianI->count() }}</td>
                                            <td>
                                                @if ($user->siswa->jumlah_total_poin < 0) <span class="badge badge-danger">{{ $user->siswa->jumlah_total_poin }}</span>
                                                    @else
                                                    <span class="badge badge-success">{{ $user->siswa->jumlah_total_poin }}</span>
                                                    @endif
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="btn btn-primary btn-sm">Lihat</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div> <!-- /.row -->
                        <div class="card-body"></div>
                    </div>
                </div><!-- /# column -->
            </div>
            <!--  /Traffic -->
            
</div> --}}

    <!-- ./animated -->
    <!-- ./content -->
@endsection