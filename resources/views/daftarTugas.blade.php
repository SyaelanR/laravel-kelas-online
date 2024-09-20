<style type="text/css"></style>
</style>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
    <link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar Tugas Yang Telah Diberikan Dikelas {{$idk}}</h2>
        <?php foreach ($tugas as $key): ?>
        <table>
            <tr>
                <td>{{ $key->judul_tugas }}</td>
                <td></td>
                <td></td>
                <td><a href="{{( url('daftarsiswatg') )}}?id={{ $key->judul_tugas }}&idk={{ $idk }}">Open</a></td>
            </tr>
        <?php endforeach ?>
        </table>
    </div>
</body>
</html>