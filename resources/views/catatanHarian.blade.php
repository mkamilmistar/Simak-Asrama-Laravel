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
                                <strong class="card-title">Catatan Harian Siswa</strong>
                                <button type="button" class="btn btn-primary float-right btn-sm right" data-toggle="modal" data-target="#exampleModal">
                                    + Tambah Catatan
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>NIP Pencatat</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>

                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no = 1; ?>
                                            @foreach ($catHarian as $cat)
                                                <td>{{$no}}</td>
                                                <td>{{$cat->siswa->nama}}</td>
                                                <td>{{$cat->guru->NIP}}</td>
                                                <td>{{$cat->kategori}}</td>
                                                <td>{{$cat->deskripsi}}</td>

                                                <td>{{Str::limit($cat->waktu, 10, "")}}</td>
                                                <td>
                                                <a href="/catatan-harian/{{$cat->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/catatan-harian/{{$cat->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                                </td>
                                                <?php $no++; ?>
                                            </tr>    
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Catatan Harian</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="/catatan-harian/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">ID Siswa</label>
                          <input name="siswa_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id siswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pembina atau Guru</label>
                            <input name="guru_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id pembina/guru">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal dan Waktu</label>
                            <input name="waktu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YY-MM-DD Hours:Minute:Second">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori Catatan</label>
                            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                              <option value="Prestasi">Prestasi</option>
                              <option value="Indisipliner">Indisipliner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan tindakan/kejadian"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>
@endsection