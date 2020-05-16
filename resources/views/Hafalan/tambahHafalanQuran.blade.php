@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Tambah Hafalan</h1>
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
                                <strong class="card-title">Tambah Hafalan</strong>
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
                                        <label for="inputSurat">Surat</label>
                                        <select class="form-control input-lg dynamic" id="inputSurat" name="surat">
                                            <option selected disabled hidden>Pilih Surat</option>
                                            @foreach($surat_list as $surat)
                                            <option value="{{$surat -> surat_id}}">
                                            {{ $surat -> surat_id}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Dari Ayat</label>
                                                <input type="number" class="form-control" id="ayat0" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sampai Ayat</label>
                                                <input type="number" class="form-control" id="ayat0" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="inputNilai">Nilai</label>
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