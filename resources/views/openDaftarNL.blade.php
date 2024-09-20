<style type="text/css">
  
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar kelas</title>
    <link rel="stylesheet" type="text/css" href="css/style10.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar nilai {{ $idS }}</h2>
        <?php foreach ($nilai as $key): ?>
        <table>
            <tr>
                <td>{{ $key->judul_tugas }}</td>
                <td></td>
                <td></td>
                <td>
                    <div class="nilai">{{ $key->nilai }}</div>
                </td>
            </tr>
        </table>
        <?php endforeach ?>
    </div>
</body>
</html>