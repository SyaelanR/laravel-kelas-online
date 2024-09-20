<!DOCTYPE html>
<html>
<head>
	<title>Halaman Guru</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<body>
	<div class="teacher-page">
		<h2>Halaman Guru</h2><h3>kelas {{ $idk }}</h3>
		<div class="menu">
			<ul>
				<li><a href="{{( url('materigr') )}}?id={{ $idk }}">Tambah Materi</a></li>
				<li><a href="{{( url('tugasgr') )}}?id={{ $idk }}">Tambah Tugas</a></li>
				<li><a href="{{( url('daftartugas') )}}?id={{ $idk }}">Beri Nilai</a></li>
				<li><a href="{{( url('daftarnilaisw'))}}?id={{ $idk }}">Daftar Nilai</a></li>
			</ul>
		</div>
	</div>
</body>
</html>