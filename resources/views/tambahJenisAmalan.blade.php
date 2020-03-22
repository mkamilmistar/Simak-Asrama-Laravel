@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Tambah Catatan Amalan Yaumiyah</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Catatan Amalan Yaumiyah</a></li>
                                        <li><a href="/catatan-yaumiyah">Tambah Jenis Catatan Amalan Yaumiyah</a></li>
                                        <li class="active">Data table</li>
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
                                <strong class="card-title">Tambah Jenis Catatan Amalan Yaumiyah</strong>
                            </div>
                            <div class="card-body">
                                <div class="kotaktambah">
                                    <div class="headertambah">
                                        <h4>Masukan Jenis Amalan baru yang diinginkan</h4>
                                        <div class="garis"></div>
                                    </div>
                                    <div class="isitambah">
                                        <form method="GET" id="my_form">
                                            @csrf
                                            <table class="table-bio">
                                                <tr >
                                                    <th style="width: 200px">Jenis Amalan Baru</th>
                                                    <td><input name="jenis_amalan"class="form-control" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <th>Bobot Nilai</th>
                                                    <td> <input name="bobot_amalan" class="form-control ini" type="number" min="0" ></td>
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <a href="/jenis-amalan-siswa" class="btn btn-danger">Batal</a>    
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