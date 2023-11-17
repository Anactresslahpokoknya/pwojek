@extends('Siswa.LayoutSiswa')
@section('isi_halaman')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: 50rem;">
            <div class="card-body">
                <form action="{{ url('alphatauri') }}" method="get" enctype="multipart/form-data">
                    @csrf
                    <h1>Entri Data Kelas</h1>
                    <div class="mb-3">
                        <label for="id_kelas" class="form-label">ID KELAS</label>
                        <input type="text" class="form-control" name="id_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">NAMA KELAS</label>
                        <input type="text" class="form-control" name="nama_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="kompetensi_keahlian" class="form-label">KOMPETENSI KEAHLIAN</label>
                        <input type="kompetensi_keahlian" class="form-control" name="kompetensi_keahlian">
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Entry</button>
                        <button class="btn form-control outline-succes mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
