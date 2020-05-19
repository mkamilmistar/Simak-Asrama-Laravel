<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catatan Harian</title>
</head>

<body>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <thead class="table-tengah">
        <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Pencatat</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Tanggal dan Waktu</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
        <td colspan="6">
        </td>
        </tr>
        </tfoot>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($catatanHarian as $cat)
            <tr>
                <td>{{$no}}</td>
                <td>{{ App\User::find($cat->siswa_id)->nama }}</td>
                <td>{{ App\User::find($cat->pembina_id)->nama }}</td>
                <td>{{ $cat->kategori }}</td>
                <td>{{ $cat->deskripsi }}</td>
                <td>{{ $cat->waktu }}</td>
            </tr>
            <?php $no++; ?>
            @endforeach
        </tbody>
        </table>
    </div>
</body>

</html> 