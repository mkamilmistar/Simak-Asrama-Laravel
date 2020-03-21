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
                                        <li><a href="/catatan-yaumiyah">Tambah Catatan Amalan Yaumiyah Siswa</a></li>
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
                                <strong class="card-title">Tambah Catatan Amalan Yaumiyah Siswa</strong>
                            </div>
                            <div class="card-body">
                                <h4>Pilih Amalan  yang telah dilakukan</h4>
                                <br>
                                
                                <!--TAMBAH DATA AMALAN -->
                                <form method="GET" id="my_form"></form>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="table-tengah">
                                                <th>No</th>
                                                <th>Jenis Amalan</th>
                                                <th colspan="2">Kondisi</th>
                                                <th style="width: 15%">Jumlah (kali)</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Sholat Tahajud
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="1">Iya</label>
                                                </td>
                                                <td>
                                                <label><input type="radio" value="0">Tidak</label>
                                                </td>
                                                <td>
                                                    <input name="jumlah" class="form-control" placeholder="Jumlah kegiatan" type="number" min=0 value=0>
                                                </td>
                                                <td>
                                                    <textarea name="keterangan" class="form-control" placeholder="misal: sholat tahajud di minggu malan" type="text"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    Sholat Dhuha
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="1">Iya</label>
                                                </td>
                                                <td>
                                                <label><input type="radio" value="0">Tidak</label> 
                                                </td>
                                                <td>
                                                    <input name="jumlah" class="form-control" placeholder="Jumlah kegiatan" type="number" min=0 value=0>
                                                </td>
                                                <td>
                                                    <textarea name="keterangan" class="form-control" placeholder="misal: sholat tahajud di minggu malan" type="text"></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <a href="/catatan-yaumiyah" class="btn btn-danger">Batal</a>    
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div> <!-- form-group// -->
                                </form>
                                <!-- END OF TAMBAH DATA SISWA -->
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