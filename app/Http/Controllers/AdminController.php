<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use App\Models\siswa;
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
public function dataSiswa(){
    $N = new siswa();
$N->create([
    'id_pembayaran' => $N->id_pembayaran,
    'nik' => $N->nik,
    'isi_laporan' => $N->isi_laporan,
    'foto' => $N->foto,
]);

return back()->with('pesan', 'selamat, registrasi berhasil');
}
}