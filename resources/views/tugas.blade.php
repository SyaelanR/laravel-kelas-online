<style type="text/css">

</style>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas {{ $idT }}</title>
    <link rel="stylesheet" type="text/css" href="css/style13.css">
</head>
<body>
    <div class="content-page">
        <h2>Tugas {{ $idT }}</h2>
        <div class="content">
        <?php foreach ($tugas as $tugs): ?>
            <?php 
                $judulTG = $tugs->judul_tugas;
                $kelas = $tugs->kelas;
             ?>
           <h3>NOTE:</h3>
            <p>{{ $tugs->note }}</p>
        </div>
        <div class="file"><a href="{{ $tugs->file_tugas }}">Download Tugas</a>
        <?php endforeach ?>
        </div>
        <div class="upload">
           <form action="{{( url('queripengumpulantugas') )}}" method="post">
            @csrf
            <input type="hidden" name="judulT" value="{{ $judulTG }}">
            <input type="hidden" name="nama" value="{{ $namaS }}">
            <input type="hidden" name="kelas" value="{{ $kelas }}">
            <table>
                <tr>
                    <td><p>Upload tugas dalam bentuk link Gdrive :</p></td>
                </tr>
                <tr>
                    <td><input type="text" name="fileTG" id="tg" required></td>
                    <td><button type="submit">Kirim</td>
                </tr>
            </table>
           </form>
        </div>















       <!--  <div class="chat-box">
        <div class="chat-header">
            <h2>Chat</h2>
        </div>
        <div class="chat-body">
            <div class="message sent">
                <img src="{{ asset('profile.jpg') }}" alt="Profile Picture">
                <p>Permsi bu mautanya untuk pengumpulan tugas apakah ada deadline</p>
            </div>
            <div class="message received">
                <img src="{{ asset('profile2.jpg') }}" alt="Profile Picture">
                <p>Ada deadline nya besok jam 12 malam ya</p>
            </div>
            <div class="message sent">
                <img src="{{ asset('profile.jpg') }}" alt="Profile Picture">
                <p>baik bu trimakasih</p>
            </div>
            <div class="message received">
                <img src="{{ asset('profile3.jpg') }}" alt="Profile Picture">
                <p>Nomor 3 jawabanya apa bu</p>
            </div>
            <div class="message received">
                <img src="{{ asset('profile2.jpg') }}" alt="Profile Picture">
                <p>kerjakan sendiri blough!</p>
            </div>
            <div class="message received">
                <img src="{{ asset('profile3.jpg') }}" alt="Profile Picture">
                <p>awokwkwokwowk</p>
            </div>
        </div>
        <div class="chat-footer">
            <form>
                <input type="text" placeholder="Type your message here...">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
  </body>
</body>
</html> -->