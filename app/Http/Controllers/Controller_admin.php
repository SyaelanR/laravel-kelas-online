<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_admin extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function tambahsiswa()
    {
        return view('tambahSiswa');
    }

    public function tambahguru()
    {
        return view('tambahGuru');
    }

    public function queritambahguru(Request $req)
    {
        $nama = $req->input('nama');
        $nip = $req->input('nip');
        $jenis_kelamin = $req->input('jenis_kelamin');
        $password = $req->input('password');
        
        DB::table('guru')->insert([
        'id_guru' => null,
        'nama' => $nama,
        'nip' => $nip,
        'jenis_kelamin' => $jenis_kelamin,
        'pasword' => $password
       ]);
        return view('tambahGuru');
    }

    public function queritambahsiswa(Request $req)
    {
        $nama = $req->input('nama');
        $nis = $req->input('nis');
        $jenis_kelamin = $req->input('jenis_kelamin');
        $kelas = $req->input('kelas');
        $password = $req->input('password');
        
        DB::table('siswa')->insert([
        'id_siswa' => null,
        'nama' => $nama,
        'nis' => $nis,
        'jenis_kelamin' => $jenis_kelamin,
        'kelas' => $kelas,
        'pasword' => $password
       ]);
        return view('tambahSiswa');
    }

    public function login()
    {
        return view('login');
    }

    public function falidasilogin(Request $req)
    {
        $count=0;
        $countdbGR = DB::table('guru')->count();
        $countdbSW = DB::table('siswa')->count();

        $id = $req->input('id');
        $nama = $req->input('nama');
        $pasword = $req->input('pasword');
        
        $users = DB::table('guru')->get();
        $murid = DB::table('siswa')->get();

            if ($id == 1) {
                    foreach ($users as $key) {
                        $count = $count + 1;
                        if ($key->nama == $nama) {
                            $pas = DB::table('guru')->where('nama',$nama)->get();
                            foreach ($pas as $feri) {
                                if ($feri->pasword == $pasword) {
                                    $namaG = $feri->nama;
                                    return view('dashboardguru', compact('namaG'));
                                }else{
                                    return view('login');
                                }
                            }
                        } elseif ($count == $countdbGR) {
                            return view('login');
                        }
                }
            }elseif ($id == 2){
                foreach ($murid as $kunci) {
                        $count = $count + 1;
                        if ($kunci->nama == $nama) {
                            $pasw = DB::table('siswa')->where('nama',$nama)->get();
                            foreach ($pasw as $feriy) {
                                if ($feriy->pasword == $pasword) {
                                    $namaS = $feriy->nama;
                                    $idk = $feriy->kelas;
                                    $materi = DB::table('materi')->where('kelas',$idk)->get();
                                    $tugas = DB::table('tugas')->where('kelas',$idk)->get();
                                    //dd($tugas);
                                    return view('kelasSW', compact('idk','materi','tugas','namaS'));
                                }else{
                                    return view('login');
                                }
                            }
                        } elseif ($count == $countdbSW) {
                            return view('login');
                        }
                }
            }
        }
    }
