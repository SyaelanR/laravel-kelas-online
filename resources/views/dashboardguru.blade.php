<style type="text/css">
</style>

<!DOCTYPE html>
<html> 
<head>
    <title>Daftar kelas</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
    <div class="class-list">
        <h2>Daftar kelas</h2>
        <table>
            <tr>
                <th>Kelas</th>
                <th></th>
                <th>Akses Guru</th>
                <th>Buka</th>
            </tr>
            <tr>
                <td>Kelas 1</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=1">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=1&namaG={{ $namaG }}">Open</a></td>
            </tr>
            <tr>
                <td>Kelas 2</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=2">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=2&namaG={{ $namaG }}">Open</a></td>
            </tr>
            <tr>
                <td>Kelas 3</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=3">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=3&namaG={{ $namaG }}">Open</a></td>
            </tr>
            <tr>
                <td>Kelas 4</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=4">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=4&namaG={{ $namaG }}">Open</a></td>
            </tr>
            <tr>
                <td>Kelas 5</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=5">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=5&namaG={{ $namaG }}">Open</a></td>
            </tr>
            <tr>
                <td>Kelas 6</td>
                <td></td>
                <td><a href="{{( url('kelasgr') )}}?id=6">Open</a></td>
                <td><a href="{{( url('kelassw') )}}?id=6&namaG={{ $namaG }}">Open</a></td>
            </tr>
        </table>
    </div>
</body>
</html>