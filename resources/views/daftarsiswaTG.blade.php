<style type="text/css">

</style>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar kelas</title>
    <link rel="stylesheet" type="text/css" href="css/style8.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar Siswa Yang Telah Mengumpulkan Tugas {{ $idT }}</h2>
        <table>
        	<tr>
        		<th>Nama:</th>
        		<th></th>
        		<th></th>
        		<th>Beri Nilai</th>
        	</tr>
            <?php foreach ($daftarPtugas as $key): ?>
            <tr>
                <td>{{ $key->nama }}</td>
                <td></td>
                <td></td>
                <td><a href="{{( url('berinilai') )}}?id={{ $key->nama }}&idT={{ $key->id_pengumpulan_tugas }}">Nilai</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>