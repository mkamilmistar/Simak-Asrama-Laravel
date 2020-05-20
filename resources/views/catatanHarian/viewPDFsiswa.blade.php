<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catatan Harian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
</head>

<body>
    <table width="100%">
        <tr>
            <td class="text-center"><img class="img-responsive" src="sites/images/favicon.png" width="85" height="80">
            </td>
            <td class="text-center">
                <h3>Sekolah Cendekia Baznas</h3>
                <p style="font-size:14px">Jl. KH. Umar Cirangkong, Cemplang, Jawa Barat, Indonesia 10220
                    <br>email:baznas@baznas.go.id </p>
            </td>
            <td class="text-center"><img class="img-responsive" src="sites/images/baznas.png" width="85"
                    height="80"><br></td>
            <hr style="height:3px;border-width:0;color:black;background-color:black">
    </table>
    <div class="text-center">
        <h5>Rekapitulasi Catatan Harian</h5>
        <p style="font-size:14px">Catatan Harian {{$data_siswa->nama}}</p>
    </div>
    <div class="text-left">
        <table class="table-bio">
            <tr>
                <th>Nama</th>
                <td>{{ $data_siswa->nama }}</td>
            </tr>
            <tr>
                <th style="width: 200px">Nomor Induk Siswa</th>
                <td>{{ $siswa->NIS }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $data_siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>
        </table>
    </div>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr class="table-tengah">
                    <th>No</th>
                    <th>Nama Pencatat</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catatanHarian as $index => $cat)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ App\User::find($cat->pembina_id)->nama }}</td>
                        <td>{{ $cat->kategori }}</td>
                        <td>{{ $cat->deskripsi }}</td>
                        <td>{{ $cat->waktu }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </div>
</body>

</html>