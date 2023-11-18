@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: rem;">
            <div class="card-body">
                <form action="jjk" method="get" enctype="multipart/form-data">
                    @csrf
                    <h1>Entri Data Siswa</h1>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="nisn" value="{{$wg->nisn}}">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" name="nis" value="{{$wg->nis}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama" value="{{$wg->nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="id_kelas" class="form-label">ID KELAS</label>
                        <input type="text" class="form-control" name="id_kelas" value="{{$wg->id_kelas}}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" value="{{$wg->alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">TELEPON</label>
                        <input type="text" class="form-control" name="no_telp" value="{{$wg->no_telp}}">
                    </div>
                    <div class="mb-3">
                        <label for="id_spp" class="form-label">ID SPP</label>
                        <input type="text" class="form-control" name="id_spp" value="{{$wg->id_spp}}">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">USERNAME</label>
                        <input type="text" class="form-control" name="username" value="{{$wg->username}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="password" value="{{$wg->password}}">
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
