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
                                        <li class="active">Catatan Amalan Yaumiyah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>   
    @include('layouts.allert') 
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Catatan Amalan Yaumiyah</strong>
                                <a href="/jenis-amalan/create" class="btn btn-primary">+ Tambah Jenis Amalan</a>
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
                                            <th>Jenis Amalan</th>
                                            <th>Keterangan</th>
                                            <th>Bobot</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($jenisAmalan as $index => $jenis)
                                            <td>{{$index + 1}}</td>
                                            <td>{{$jenis->jenisAmalan}}</td>
                                            <td>{{$jenis->keterangan}}</td>
                                            <td>{{$jenis->bobotAmalan}}</td>
                                            <td>
                                                <a href="/jenis-amalan/{{$jenis->id}}/edit">
                                                
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a href="/jenis-amalan/{{$jenis->id}}/delete" onClick="return confirm('Yakin untuk menghapus?')">
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