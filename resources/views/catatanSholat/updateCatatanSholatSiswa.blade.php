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
                                @if (Auth::user()->role !== "siswa")
                                    <li><a href="{{route('viewPoinSearchPage')}}">Poin Pelanggaran dan Kebaikan</a></li>
                                @else
                                    <li><a href="#">Poin Pelanggaran dan Kebaikan</a></li>
                                @endif
                                <li><a href="{{ route('viewPoinSiswaPage', $siswa->id) }}">{{ $siswa->user->nama }}</a>
                                </li>
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
                            <strong class="card-title">Update Poin Kebaikan atau Pelanggaran</strong>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="inputJenisPoin">Jenis Poin</label>
                                    <select class="custom-select" id="inputJenisPoin" name="jenis">
                                        <option selected disabled hidden>Pilih Jenis Poin</option>
                                        <option value="kebaikan">Poin Kebaikan</option>
                                        <option value="keburukan">Poin Keburukan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputFormTanggal">Tanggal</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="01/20/2020"
                                               value={{ $poinKebaikan->tanggal }} name="tanggal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputFormPoin">Jumlah Poin</label>
                                    <select class="custom-select" id="inputJenisPoin" name="poin">
                                        <option selected disabled hidden>
                                            Pilih Jumlah Poin
                                        </option>
                                        <option value="5">5</option>
                                        <option value="15">15</option>
                                        <option value="25">25</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputFormTextarea">Keterangan</label>
                                    <textarea class="form-control" id="inputFormTextarea" rows="3"
                                              name="keterangan">{{ $poinKebaikan->keterangan  }}</textarea>
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