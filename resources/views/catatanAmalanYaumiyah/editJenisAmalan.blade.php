@extends('layouts.app')

@section('content')
@include('layouts.allert')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Tambah Catatan Kebaikan</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Kebaikan & Keburukan</a></li>
                                        <li class="active">Tambah Catatan Kebaikan & Keburukan Siswa</li>
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
                                <strong class="card-title">Edit Catatan Kebaikan & Keburukan</strong>
                            </div>
                            <div class="card-body">
                                <div class="kotaktambah">
                                    <div class="headertambah">
                                        <h4>Masukan Catatan Kebaikan/Kuburukan </h4>
                                        <div class="garis2"></div>
                                    </div>
                                    @include('layouts.allert')
                                    <div class="isitambah">
                                         <form action="/jenis-amalan/{{$jenisAmalan->id}}/update" method="POST">
                                            @csrf
                                            <table class="table-bio">
                                                <tr>
                                                    <th>Jenis Amalan</th>
                                                    <td> <input value="{{$jenisAmalan->jenisAmalan}}" name="jenisAmalan"class="form-control @error('jenisAmalan') is-invalid @enderror" type="text">
                                                        @error('jenisAmalan')
                                                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <td><textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" >{{$jenisAmalan->keterangan}}</textarea> 
                                                        @error('keterangan')
                                                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Bobot Amalan</th>
                                                    <td> <input value="{{$jenisAmalan->bobotAmalan}}"name="bobotAmalan"class="form-control @error('bobotAmalan') is-invalid @enderror" type="text">
                                                        @error('bobotAmalan')
                                                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <a href="/jenis-amalan" class="btn btn-danger">Batal</a>    
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div> <!-- form-group// -->
                                        </form>
                                    </div>
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