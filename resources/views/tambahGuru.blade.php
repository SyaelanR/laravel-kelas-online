<style type="text/css">
	
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
		<div class="header">
			<h1>Form Tambah Guru</h1>
		</div>
         <div class="container">
        <form action="{{( url('queritambahguru') )}}" method="post">
            @csrf
            <label for="nama"><h3>Nama:</h3></label>
            <input type="text" id="nama" name="nama" required autocomplete="off"><br>

            <label for="nis"><h3>NIP:</h3></label>
            <input type="text" id="nis" name="nip" required autocomplete="off"><br>

            <label><h3>Jenis Kelamin:</h3></label><br>
            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki">Laki-laki</label><br>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br>

            <label for="password"><h3>Password:</h3></label>
            <input type="text" id="password" name="password" required autocomplete="off"><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
