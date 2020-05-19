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
                                        <li class="active">Tambah Hafalan Quran</li>
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
                                        <td>{{$data_user->siswa->NIS}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{$data_user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$data_user->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>{{$data_user->siswa->kelas}}</td>
                                    </tr>
                                </table>
                                <!-- END OF DATA SISWA -->
                                <br>
                                <!-- DATA AMALAN -->
                                <form action="/hafalan-pembina/{{$data_user->id}}/create-hafalan" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="inputSurat">Surat</label>
                                        <select class="form-control @error('surat') is-invalid @enderror" id="inputSurat" name="surat">
                                            <option selected disabled hidden>Pilih Surat</option>
                                            @foreach($surat_list as $surat)
                                            <option value="{{$surat -> id}}">
                                            {{ $surat -> surat_id}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('surat')
                                                    <span
                                                        class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="inputPM">Pagi/Malam</label>
                                            <select class="form-control @error('PM') is-invalid @enderror" id="inputPM" name="PM">
                                                <option selected disabled hidden></option>
                                                <option>Pagi</option>
                                                <option>Malam</option>
                                            </select>
                                            @error('PM')
                                                    <span
                                                        class="invalid-feedback d-block"><strong>this field is required</strong></span>
                                            @enderror
                                    </div>
                                    <div>
                                        <label for="inputTM">Tahfidz/Murajaah</label>
                                            <select class="form-control @error('TM') is-invalid @enderror" id="inputTM" name="TM">
                                                <option selected disabled hidden></option>
                                                <option>Tahfidz</option>
                                                <option>Murajaah</option>
                                            </select>
                                            @error('TM')
                                                    <span
                                                        class="invalid-feedback d-block"><strong>this field is required</strong></span>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="inputAyat0">Dari Ayat</label>
                                                <input type="number" class="form-control" id="inputAyat0", name="ayat0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inputAyat1">
                                                <label for="inputAyat1">Sampai Ayat</label>
                                                <input type="number" class="form-control" id="inputAyat1", name="ayat1">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="inputNilai">Nilai</label>
                                            <select class="form-control @error('nilai') is-invalid @enderror" id="inputNilai" name="nilai">
                                                <option selected disabled hidden>Beri Nilai</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                            @error('nilai')
                                                    <span
                                                        class="invalid-feedback d-block"><strong>this field is required</strong></span>
                                            @enderror
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