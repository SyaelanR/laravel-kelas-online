<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class Controller_guru extends Controller
{
    public function dashboardguru()
    {
        return view('dashboardguru');
    }

    public function kelasgr(Request $id)
    {
        $idk = $id->input('id');
        return view('kelasgr', compact('idk'));
    }

    public function materigr(Request $id)
    {
        $idk = $id->input('id');
        return view('materiGR', compact('idk'));
    }

    public function tugasgr(Request $id)
    {
        $idk = $id->input('id');
        return view('tugasGR', compact('idk'));
    }

    public function daftartugas(Request $id)
    {
        $idk = $id->input('id');
        $tugas = DB::table('tugas')->where('kelas',$idk)->get();
        return view('daftartugas', compact('idk','tugas'));
    }

    public function daftarsiswatg(Request $id)
    {
        $idT = $id->input('id');
        $idK = $id->input('idk');
        $daftarPtugas = DB::table('pengumpulan_tugas')->where('judul_tugas',$idT)->where('kelas',$idK)->get();
        return view('daftarsiswaTG', compact('idT','daftarPtugas'));
    }

    public function berinilai(Request $id)
    {
        $idS = $id->input('id');
        $idT = $id->input('idT');
        $tugas = DB::table('pengumpulan_tugas')->where('id_pengumpulan_tugas',$idT)->get();
        return view('berinilai', compact('idS','tugas'));
    }

     public function daftarnilaisw(Request $id)
    {
        $idk = $id->input('id');
        $siswa = DB::table('siswa')->where('kelas',$idk)->get();
        return view('daftarNilaiSW', compact('idk','siswa'));
    }

    public function opendaftarnl(Request $id)
    {
        $idS = $id->input('id');
        $nilai = DB::table('pengumpulan_tugas')->where('nama',$idS)->get();
        return view('openDaftarNL', compact('idS','nilai'));
    }

    public function kelassw(Request $id)
    {
        $namaS = $id->input('namaG');
        $idk = $id->input('id');
        $materi = DB::table('materi')->where('kelas',$idk)->get();
        $tugas = DB::table('tugas')->where('kelas',$idk)->get();
        return view('kelasSW')->with(compact('idk', 'materi', 'tugas','namaS'));

    }

    public function tugas(Request $id)
    {
        $idT = $id->input('id');
        $namaS = $id->input('namaS');
        $kelas = $id->input('kelas');
        $tugas = DB::table('tugas')->where('judul_tugas', $idT)->where('kelas',$kelas)->get();
        return view('tugas', compact('idT','tugas','namaS'));
    }

    public function materi(Request $id)
    {
        $idM = $id->input('id');
        $idk = $id->input('kelas');
        $namaS = $id->input('namaS');
        $materi = DB::table('materi')->where('judul_materi', $idM)->where('kelas',$idk)->get();
        foreach ($materi as $key) {
            $iDM = $key->id_materi;
        }
        $chat = DB::table('chat')->where('id_M',$iDM)->get();
        return view('materi', compact('idM', 'materi','chat','namaS'));
    }

    public function kelasswS()
    {
        $idk = 3;
        return view('kelasSW', compact('idk'));
    }

    public function queritambahmt(Request $req)
    {
        $judulM = $req->input('judulM');
        $fileM = $req->input('fileM');
        $noteM = $req->input('noteM');
        $kelas = $req->input('kelas');

    DB::table('materi')->insert([
        'id_materi' => null,
        'judul_materi' => $judulM,
        'file_materi' => $fileM,
        'note' =>$noteM,
        'kelas' => $kelas
    ]);
    $idk = $kelas;
    return view('materiGR', compact('idk'));
    }

    public function queritambahtg(Request $req)
    {
        $judultg = $req->input('judultg');
        $filetg = $req->input('filetg');
        $notetg = $req->input('notetg');
        $kelas = $req->input('kelas');

    DB::table('tugas')->insert([
        'id_tugas' => null,
        'judul_tugas' => $judultg,
        'file_tugas' => $filetg,
        'note' =>$notetg,
        'kelas' => $kelas
    ]);
    $idk = $kelas;
    return view('tugasGR', compact('idk'));
    }

    public function queripengumpulantugas(Request $req)
    {
        $judultg = $req->input('judulT');
        $nama = $req->input('nama');
        $kelas = $req->input('kelas');
        $fileTG = $req->input('fileTG');

        DB::table('pengumpulan_tugas')->insert([
            'id_pengumpulan_tugas' => null,
            'judul_tugas' => $judultg,
            'nama' => $nama,
            'kelas' => $kelas,
            'file_pengumpulan_tugas' => $fileTG,
            'nilai' => null
        ]);
        $idT = $judultg;
        $namaS = $nama;
        $tugas = DB::table('tugas')->where('judul_tugas', $idT)->where('kelas',$kelas)->get();
        return view('tugas', compact('idT','tugas','namaS'));
    }

    public function queriberinilai(Request $req)
    {
        $idPT = $req->input('idT');
        $nilai = $req->input('nilai');
        
        DB::table('pengumpulan_tugas')->where('id_pengumpulan_tugas',$idPT)->update(['nilai' => $nilai]);

        $idS = $req->input('idS');
        $idT = $idPT;
        $tugas = DB::table('pengumpulan_tugas')->where('id_pengumpulan_tugas',$idPT)->get();
        return view('berinilai', compact('idS','tugas'));
    }

    public function querichat(Request $req)
    {
        $nama = $req->input('nama');
        $text = $req->input('text');
        $idM = $req->input('idM');
        $idk = $req->input('idk');
        $judul = $req->input('judul');

        DB::table('chat')->insert([
            'id_chat' => null,
            'nama' => $nama,
            'teks' => $text,
            'id_M' => $idM,
            'pp' => null
        ]);
        $namaS = $nama;
        $materi = DB::table('materi')->where('judul_materi', $judul)->where('kelas',$idk)->get();
        foreach ($materi as $key) {
            $iDM = $key->id_materi;
        }
        $chat = DB::table('chat')->where('id_M',$iDM)->get();
        return view('materi', compact('idM', 'materi','chat','namaS'));
        
        // $redirect = new RedirectResponse('http://localhost/PROJECT/public/materi?id={{ $judul }}&kelas={{$idk}}&namaS={{$nama}}');
        // return $redirect;
    }

}
