<style type="text/css">
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar kelas</title>
    <link rel="stylesheet" type="text/css" href="css/style9.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar nilai siswa untuk kelas {{ $idk }}</h2>
        <?php foreach ($siswa as $key): ?>
        <table>
            <tr>
                <td>{{ $key->nama }}</td>
                <td></td>
                <td></td>
                <td><a href="{{( url('opendaftarnl') )}}?id={{ $key->nama }}">Open</a></td>
            </tr>
        </table>
        <?php endforeach ?>
    </div>
</body>
</html>