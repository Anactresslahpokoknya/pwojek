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
        $p = $p->where('nisn', $request->input('nisn'))->where('captcha', $request->input('captcha'));

        if ($p->exists()) {
            session([
                'nisn' => $request->input('nisn'),
                'captcha' => $request->input('captcha'),
            ]);
            return redirect('/');
        }
        return back();
    }

}

