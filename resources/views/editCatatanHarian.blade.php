@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catatan Harian</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/catatan-harian">Catatan Harian</a></li>
                            <li>Edit Catatan Harian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    @if(session('sukses'))
    <div class="alert alert-warning" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Edit Catatan Harian</strong>
                    </div>
                    <div class="card-body">
                        <div class="panel">
                            <div class="panel-body">
                                <form action="/catatan-harian/{{$catatanHarian->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID Siswa</label>
                                        <input name="siswa_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id siswa" value="{{$catatanHarian->siswa_id}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">ID Pembina atau Guru</label>
                                          <input name="guru_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id pembina/guru" value="{{$catatanHarian->guru_id}}">
                                        </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Tanggal dan Waktu</label>
                                          <input name="waktu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YY-MM-DD Hours:Minute:Second" value="{{$catatanHarian->waktu}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleFormControlSelect1">Kategori Catatan</label>
                                          <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                            <option value="Prestasi" @if($catatanHarian->kategori == 'Prestasi') selected @endif>Prestasi</option>
                                            <option value="Indisipliner" @if($catatanHarian->kategori == 'Indisipliner') selected @endif>Indisipliner</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Keterangan</label>
                                          <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan tindakan/kejadian">{{$catatanHarian->deskripsi}}</textarea>
                                      </div>
                                    <button type="submit" class="btn btn-warning btn-sm">Update</button> 
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->    

@endsection