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
                                        <form method="GET" id="my_form">
                                            @csrf
                                            <table class="table-bio">
                                                <tr >
                                                    <th style="width: 200px">Hari/Tanggal</th>
                                                    <td><input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jam</th>
                                                    <td> <input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Amalan</th>
                                                    <td> <input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kegiatan</th>
                                                    <td> <input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi Kegiatan</th>
                                                    <td> <textarea name="bobot_amalan" class="form-control ini" >Kucing</textarea></td>
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