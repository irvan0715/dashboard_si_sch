<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function ProfileSiswa()
    {
        return view('pages/siswa/profile_siswa');
    }
    public function Nilai()
    {
        return view('pages/siswa/nilai');
    }
    public function KehadiranSiswa()
    {
        return view('pages/siswa/kehadiran_siswa');
    }
    public function DaftarSiswa()
    {
        return view('pages/siswa/daftar_siswa');
    }
    public function NilaiSiswa()
    {
        return view('pages/siswa/nilai_siswa');
    }
    public function AbsensiSiswa()
    {
        return view('pages/siswa/absensi_siswa');
    }
}
