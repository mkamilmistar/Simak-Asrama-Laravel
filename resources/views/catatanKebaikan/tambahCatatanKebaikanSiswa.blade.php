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
    @include('layouts.allert')
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
                                         <form action="/catatan-kebaikan/{auth()->user()->id}}/create" method="POST">
                                            @csrf
                                            <table class="table-bio">
                                                    <th>Jenis Amalan</th>
                                                    <td> 
                                                        <select name="jenis" class="form-control" id="jenis">
                                                            <option value="Baik">Baik</option>
                                                            <option value="Buruk">Buruk</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kegiatan</th>
                                                    <td> 
                                                        <input name="kegiatan"class="form-control @error('kegiatan') is-invalid @enderror" type="text" value="{{ old('kegiatan') }}">
                                                        @error('kegiatan')
                                                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <td>
                                                    
                                                </td>
                                                <tr>
                                                    <th>Deskripsi Kegiatan</th>
                                                    <td> <textarea name="keterangan" class="form-control ini @error('keterangan') is-invalid @enderror" placeholder="Masukan Keterangan Kegiatan Anda" >{{ old('keterangan') }}</textarea>
                                                        @error('keterangan')
                                                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Kegiatan</th>
                                                    <td>
                                                        <input name="tanggal" type='text' class='datepicker-here form-control' data-language='en' value="{{ old('tanggal') }}" />
                                                        @error('tanggal')
                                                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="form-group">
                                                <a href="/catatan-kebaikan/{{auth()->user()->id}}" class="btn btn-danger">Batal</a>    
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