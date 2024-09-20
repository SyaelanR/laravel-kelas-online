<style type="text/css">
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas & Materi </title>
    <link rel="stylesheet" type="text/css" href="css/style11.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar Tugas & Materi Kelas {{ $idk }}</h2>
        <h3>Materi</h3>
        <?php foreach ($materi as $mater): ?>
        <table>
            <tr>
                <td>{{ $mater->judul_materi }}</td>
                <td></td>
                <td></td>
                <td><a href="{{( url('materi') )}}?id={{ $mater->judul_materi }}&kelas={{$idk}}&namaS={{ $namaS }}">Open</a></td>
            </tr>
        </table>
        <?php endforeach ?>
        <h3>Tugas</h3>
        <?php foreach ($tugas as $tugs): ?>
        <table>
            <tr>
                <th>{{ $tugs->judul_tugas }}</th>
                <th></th>
                <th></th>
                <th><a href="{{( url('tugas') )}}?id={{ $tugs->judul_tugas }}&namaS={{ $namaS }}&kelas={{$idk}}">Open</a></th>
            </tr>
        </table>
        <?php endforeach ?>
    </div>
</body>
</html>