@extends('Siswa.LayoutSiswa')

@section('title')
Bina Kerja Education Solution
@endsection

@section('isi_halaman')
    <div class="container text-center d-flex justify-content-center align-items-center vh-100">
        <div class="">

            <h3>Welcome To Our Family Let's be Part Of Us</h3>
            <a href="{{ url('jokowi') }}" type="button" class="btn btn-primary">Riwayat Pembayaran</a>
        </div>
    </div>
@endsection
