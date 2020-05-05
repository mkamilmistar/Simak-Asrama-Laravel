@extends('layouts.app')

@section('content')
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
                                <strong class="card-title">Tambah Catatan Kebaikan & Keburukan</strong>
                            </div>
                            <div class="card-body">
                                <div class="kotaktambah">
                                    <div class="headertambah">
                                        <h4>Masukan Catatan Kebaikan/Kuburukan </h4>
                                        <div class="garis2"></div>
                                    </div>
                                    <div class="isitambah">
                                        @if ($catatanKebaikan->id ?? '')
                                        <form method="POST" action="{{ route('tambahEntriCatatanKebaikanSiswa') }}" id="my_form">
                                        @else
                                        <form method="POST" action="{{ route('updateEntriCatatanKebaikanSiswa') }}" id="my_form">
                                        @endif
                                            @csrf
                                            @if ($catatanKebaikan->id ?? '')
                                            <input type="hidden" name="id" value="{{ $catatanKebaikan->id }}"></input>
                                            @endif
                                            <table class="table-bio">
                                                <!-- <tr >
                                                    <th style="width: 200px">Hari/Tanggal</th>
                                                    <td><input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jam</th>
                                                    <td> <input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr> -->
                                                <tr>
                                                    <th>Jenis Amalan</th>
                                                    <td>
                                                    <select class="form-control" name="jenis">
                                                        <option value="" selected disabled hidden>Pilih disini</option>
                                                        <option value="0">Catatan Keburukan</option>
                                                        <option value="1">Catatan Kebaikan</option>
                                                    </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kegiatan</th>
                                                    <td> <input name="kegiatan"class="form-control" type="text" value="{{ $catatanKebaikan->kegiatan ?? '' }}"/></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi Kegiatan</th>
                                                    <td><textarea name="deskripsi" class="form-control ini" style="min-width:100%;" placeholder="Contoh: Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membereskannya">{{ $catatanKebaikan->deskripsi ?? "" }}</textarea></td>
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <a href="/catatan-kebaikan" class="btn btn-danger">Batal</a>    
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