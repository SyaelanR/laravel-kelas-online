 <style type="text/css">

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Materi</title>
	<link rel="stylesheet" type="text/css" href="css/style12.css">
</head>
<body>
	<div class="add-task">
		<h2>Tambah Materi untuk kelas {{ $idk }}</h2>
		<form action="{{( url('queritambahmt') )}}" method="post">
			@csrf
			<div class="form-group">
				<label for="task-name">Judul Materi:</label>
				<input type="text" id="task-name" name="judulM" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label for="task-file">File Materi (dalam bentuk link Gdrive) :</label>
				<input type="text" id="task-file" name="fileM" class="custom-file-input" required>
			</div>
			<div class="form-group">
				<label for="task-note">Catatan:</label>
				<textarea id="task-note" name="noteM" autocomplete="off" required></textarea>
			</div>
			<input type="hidden" name="kelas" value="{{ $idk }}">
			<button type="submit">Add Materi</button>
		</form>
	</div>
</body>
</html>