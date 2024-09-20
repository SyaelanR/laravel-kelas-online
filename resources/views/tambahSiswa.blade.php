<style type="text/css">
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
		<div class="header">
			<h1>Form Tambah Siswa</h1>
		</div>
         <div class="container">
        <form action="{{( url('queritambahsiswa') )}}" method="post">
            @csrf
            <label for="nama"><h3>Nama:</h3></label>
            <input type="text" id="nama" name="nama" required autocomplete="off"><br>

            <label for="nis"><h3>NIS:</h3></label>
            <input type="text" id="nis" name="nis" required autocomplete="off"><br>

            <label><h3>Jenis Kelamin:</h3></label><br>
            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki">Laki-laki</label><br>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br>

            <label for="kelas"><h3>Kelas:</h3></label>
            <select id="kelas" name="kelas">
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <option value="3">Kelas 3</option>
                <option value="4">Kelas 4</option>
                <option value="5">Kelas 5</option>
                <option value="6">Kelas 6</option>
            </select><br>

            <label for="password"><h3>Password:</h3></label>
            <input type="text" id="password" name="password" required autocomplete="off"><br>

            <input type="submit" value="Submit" name="Submit">
        </form>
    </div>
</body>
</html>
