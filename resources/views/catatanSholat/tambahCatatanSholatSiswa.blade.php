@extends('layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catatan Sholat</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            @if (Auth::user()->role !== "siswa")
                            <li><a href="{{route('viewSholatSearchPage')}}">Catatan Sholat</a></li>
                            @else
                            <li><a href="#">Catatan Sholat</a></li>
                            @endif
                            <li><a href="{{ route('viewSholatSiswaPage', $siswa->id) }}">{{ $siswa->user->nama }}</a></li>
                            <li class="active">Tambah Baru</li>
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
                        <strong class="card-title">Input Catatan Sholat</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="inputFormTanggal">Tanggal</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="yyyy/mm/dd" name="tanggal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFormTextarea">Jenis Sholat</label>
                                <textarea class="form-control" id="inputFormTextarea" rows="1" name="jenis_sholat"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputFormTextarea">Waktu Absen</label>
                                <input type="text" class="form-control" placeholder="HH:MM" name="waktu_masuk2">
                            </div>

                            <div class="form-group">
                                <label for="inputFormTextarea">Waktu Sholat</label>
                                <input type="text" class="form-control" placeholder="HH:MM" name="waktu_adzan2">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<!-- ./animated -->
<!-- ./content -->
@endsection