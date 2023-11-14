<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\pembayaran;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginAdmin(){
        return view('Admin.Login');
    }

public function LoginAdminCek(Request $request){
    $p = new petugas();
    $p = $p->where('username', $request->input('username'))->where('password', $request->input('password'));

    if ($p->exists()) {
        session([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);
        return redirect('/');
    }
    return back();
}
public function Entry(Request $request){
    $N = new pembayaran();
    $N->create([
        'id_pembayaran' => $request->id_pembayaran,
        'id_petugas' => $request->id_petugas,
        'nisn' => $request->nisn,
        'tgl_bayar' => $request->tgl_bayar,
        'bulan_dibayar' => $request->bulan_dibayar,
        'tahun_dibayar' => $request->tahun_dibayar,
        'id_spp' => $request->id_spp,
        'jumlah_bayar' => $request->jumlah_bayar,
    ]);

    return back()->with('pesan', 'selamat, registrasi berhasil');
}
public function lk()
{
    return view('Admin.EntriTransaksiPembayaran');
}

public function validasi()
{
    $m = new siswa();
    return view('Admin.DataSiswa', ['wg' => $m->all()]);
}

public function dtspp()
{
    $m = new spp();
    return view('Admin.DataSpp', ['wg' => $m->all()]);
}

public function dtptgs()
{
    $m = new petugas();
    return view('Admin.DataPetugas', ['wg' => $m->all()]);
}

public function dtkls()
{
    $m = new kelas();
    return view('Admin.DataKelas', ['wg' => $m->all()]);
}

public function laporan()
{
    $m = new pembayaran();
    return view('Admin.GL', ['wg' => $m->all()]);
}

}