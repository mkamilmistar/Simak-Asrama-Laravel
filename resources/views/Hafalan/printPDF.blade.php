<!DOCTYPE html>
<html>

<head>
    <title>Hafalan Al-Quran, Doa dan Hadist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
</head>

<body>
    <!-- kop surat -->
<body>
    <table width="100%">
        <tr>
            <td class="text-center"><img class="img-responsive" src="sites/images/favicon.png" width="85" height="80"></td>
            <td class="text-center">
                <h3>Sekolah Cendekia Baznas</h3>
                <p style="font-size:14px">Jl. KH. Umar Cirangkong, Cemplang, Jawa Barat, Indonesia 10220 <br>email:baznas@baznas.go.id </p>
            </td>
            <td class="text-center"><img class="img-responsive" src="sites/images/baznas.png" width="85" height="80"><br></td>
         <hr style="height:3px;border-width:0;color:black;background-color:black">
    </table>

    <div class="text-center">
    <h5>Rekapitulasi Hafalan</h5>
    <p style="font-size:14px">Hafalan Quran, Doa dan Hadist</p>
    </div>
    <div class="card-body">
        <!-- Data Siswa -->
        <table class="table-bio">
            <tr>
                <th style="width: 200px">Nomor Induk Siswa</th>
                <td>{{ $data_user->siswa->NIS }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $data_user->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $data_user->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $data_user->kelas }}</td>
            </tr>
        </table>
        <!-- END OF DATA SISWA -->
        <br>
        <!-- DATA POIN KEBAIKAN -->
        <h5><strong>Hafalan Al-Quran</strong> </h5>
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr class="table-tengah">
                    <th rowspan = "2">No</th>
                    <th rowspan = "2">Tanggal</th>
                    <th rowspan = "2">P/M</th>
                    <th rowspan = "2">T/M</th>
                    <th rowspan = "2">Surat</th>
                    <th colspan = "2">Ayat</th>
                    <th rowspan = "2">Nilai</th>
                    <th rowspan = "2">Pemeriksa</th>
                </tr>
                <tr class="table-tengah">
                    <th>Dari</th>
                    <th>Sampai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_hafalan as $index => $haf)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$haf->tanggal}}</td>
                    <td>{{$haf->pm}}</td>
                    <td>{{$haf->tm}}</td>
                    <td>{{$haf->surat->surat_id}}</td>
                    <td>{{$haf->ayat0}}</td>
                    <td>{{$haf->ayat1}}</td>
                    <td>{{$haf->nilai}}</td>
                    <td>{{$haf->guru->user->nama}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <h5><strong>Hafalan Doa & Hadist</strong> </h5>
        <!-- DATA POIN KEBURUKAN -->
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr class="table-tengah">
                    <th rowspan = "2">No</th>
                    <th rowspan = "2">Tanggal</th>
                    <th rowspan = "2">P/M</th>
                    <th rowspan = "2">Doa</th>
                    <th rowspan = "2">Hadist</th>
                    <th rowspan = "2">Nilai</th>
                    <th rowspan = "2">Pemeriksa</th>
                </tr>
                <tr class="table-tengah">
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($data_hafalan2 as $index => $haf2)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$haf2->tanggal}}</td>
                    <td>{{$haf2->pm}}</td>
                    <td>{{$haf2->doa}}</td>
                    <td>{{$haf2->hadist}}</td>
                    <td>{{$haf2->nilai}}</td>
                    <td>{{$haf2->guru->user->nama}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END OF DATA SISWA -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.html5.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.print.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/lib/data-table/buttons.colVis.min.js') }}">
    </script>
    <script src="{{ asset('sites/assets/js/init/datatables-init.js') }}"></script>
</body>

</html>