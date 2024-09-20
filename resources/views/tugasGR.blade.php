<!DOCTYPE html>
<html>
<head>
	<title>Tambah tugas</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
	<div class="add-task">
		<h2>Tambah Tugas Untuk Kelas {{$idk}}</h2>
		<form action="{{( url('queritambahtg') )}}" method="post">
			@csrf
			<div class="form-group">
				<label for="task-name">Judul Tugas:</label>
				<input type="text" id="task-name" name="judultg" required autocomplete="off">
			</div>
			<div class="form-group">
				<label for="task-file">Tugas File (dalam bentuk link Gdrive) :</label>
				<input type="text" id="task-file" name="filetg" class="custom-file-input" required>
			</div>
			<div class="form-group">
				<label for="task-note">Catatan:</label>
				<textarea id="task-note" name="notetg" required></textarea>
			</div>
			<input type="hidden" name="kelas" value="{{$idk}}">
			<button type="submit">Add Task</button>
		</form>
	</div>
</body>
</html>