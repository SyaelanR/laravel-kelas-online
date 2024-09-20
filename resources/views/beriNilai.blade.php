<style type="text/css">

</style>

<!DOCTYPE html>
<html>
<head>
    <title>Beri nilai</title>
    <link rel="stylesheet" type="text/css" href="css/style16.css">
</head>
<body>
    <div class="class-list">
       <h2>Beri nilai kepada: {{ $idS }}</h2>
       <?php foreach ($tugas as $key): ?>
        <form action="{{( url('queriberinilai') )}}" method="post">
            @csrf
       <table>
       	<tr>
       		<td><input type="text" name="nilai" placeholder="Input Nilai" value="{{ $key->nilai }}"></td>
            <input type="hidden" name="idT" value="{{ $key->id_pengumpulan_tugas }}">
            <input type="hidden" name="idS" value="{{ $idS }}">
       		<button type="submit">kirim</button>
       	</tr>
       </table>
       </form>
       <a href="{{ $key->file_pengumpulan_tugas }}">buka hasil pengumpulan tugas</a>
    </div>
       <?php endforeach ?>
</body>
</html>