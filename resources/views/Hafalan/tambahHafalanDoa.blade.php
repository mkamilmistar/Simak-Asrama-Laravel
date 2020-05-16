@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Tambah Hafalan Hadits atau Doa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="/catatan-yaumiyah">Hafalan Al-Qur'an</a></li>
                                        <li><a href="/catatan-yaumiyah">Record Hafalan Siswa</a></li>
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
                                <strong class="card-title">Tambah Hafalan Hadits atau Doa</strong>
                            </div>
                            <div class="card-body">
                                <!-- Data Siswa -->
                                <table class="table-bio">
                                    <tr >
                                        <th style="width: 200px">Nomor Induk Siswa</th>
                                        <td>$data_user->siswa->NIS</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>$data_user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{$data_user->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>{$data_user->siswa->kelas}}</td>
                                    </tr>
                                </table>
                                <!-- END OF DATA SISWA -->
                                <br>
                                <!-- DATA AMALAN -->
                                <form>
                                    <div class="form-group">
                                        <label for="inputJenisPoin">Jenis Hafalan</label>
                                        <select class="custom-select" id="inputJenisPoin" name="jenis">
                                            <option selected disabled hidden>Pilih Jenis Hafalan</option>
                                            <option value="kebaikan">Doa</option>
                                            <option value="keburukan">Hadits</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaHafalan">Nama Hafalan</label>
                                        <input type="text" class="form-control" id="inputNamaHafalan" placeholder="Doa Setelah Makan">
                                    </div>
                                   <div>
                                   <label for="nilai">Nilai</label>
                                    <select class="form-control input-lg dynamic" id="inputNilai" name="nilai">
                                            <option selected disabled hidden>Beri Nilai</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                    </select>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </form>
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