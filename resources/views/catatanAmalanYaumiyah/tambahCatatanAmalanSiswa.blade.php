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
    @include('layouts.allert')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tambah Catatan Amalan Yaumiyah Siswa</strong>
                    </div>
                    <div class="card-body">
                        <h4>Pilih Amalan yang telah dilakukan</h4>
                        <br>

                        <!--TAMBAH DATA AMALAN -->
                        <form method="POST" action="/catatan-yaumiyah/create">
                            <table class="table table-striped table-bordered">
                                @csrf
                                <thead>
                                    <tr class="table-tengah">
                                        <th>No</th>
                                        <th>Jenis Amalan</th>
                                        <th style="width: 15%">Jumlah (kali)</th>
                                        <th>Keterangan</th>
                                        <th>none</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jenisCatatan as $index => $jenis)
                                        <tr>
                                            <td>{{ $index + 1 }}

                                            </td>
                                            <td>
                                                {{ $jenis->jenisAmalan }}
                                            </td>
                                            <td>
                                                <input name="jumlah" id="yes" class="form-control"
                                                    placeholder=" Jumlah kegiatan" type="number" min=0 value=0>
                                            </td>

                                            <td>
                                                <textarea name="keterangan" class="form-control"
                                                    placeholder="misal: sholat tahajud di minggu malan"
                                                    type="text"></textarea>
                                            </td>
                                            <td> <input name="jenisAmalan_id" value="{{ $jenis->id }}"></td>
                                        </tr>
                                    @endforeach
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