<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function login()
    {
        return view('Siswa.Login');
    }

    public function ceklogin(Request $request)
    {
        $p = new siswa();
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

}

