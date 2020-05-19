@extends('layouts.app')

@section('content')
@if(auth()->user()->role=='pembina')
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
                {{ session('sukses') }}
            </div>
        @endif
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Catatan Harian Siswa</strong>
                            <button type="button" class="btn btn-primary float-right btn-sm right" data-toggle="modal"
                                data-target="#exampleModal">
                                + Tambah Catatan
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <a href="/catatan-harian/pdf"
                                    class="btn btn-primary btn-sm">Export to PDF</a>
                                <br><br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Nama Pencatat</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($catatanHarian as $index => $cat)
                                            <tr>
                                                <td>{{ $index +1 }}</td>
                                                <td><a href="/profile/{{ $cat->siswa_id }}/view">{{ App\User::find($cat->siswa_id)->nama }}</td>
                                                <td><a href="/profile/{{ $cat->pembina_id }}/view">{{ App\User::find($cat->pembina_id)->nama }}</td>
                                                <td>{{ $cat->kategori }}</td>
                                                <td>{{ $cat->deskripsi }}</td>
                                                <td>{{ Str::limit($cat->waktu, 10, "") }}</td>
                                                <td>
                                                    <a href="/catatan-harian/{{ $cat->id }}/edit"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/catatan-harian/{{ $cat->id }}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Siswa</label>
                            <select name="siswa_id" class="form-control" id="siswa_id">
                                @foreach($data_siswa as $data_siswa)
                                    <option value="{{ $data_siswa->id }}">{{ $data_siswa->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pembina atau Guru</label>
                            <select name="pembina_id" class="form-control" id="pembina_id">
                                @foreach($data_guru as $data_guru)
                                    <option value="{{ $data_guru->id }}">{{ $data_guru->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Tanggal dan Waktu</label>
                            <input name="waktu" type='text' class="datepicker-here form-control"
                                data-date-useseconds="true" data-timepicker="true" data-language='en' />
                            <!-- <input name="waktu" type='text' class='datepicker-here form-control' data-language='en' /> -->
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
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Keterangan tindakan/kejadian"></textarea>
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
@endif
@endsection