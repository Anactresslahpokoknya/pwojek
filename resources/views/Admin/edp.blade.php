@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: rem;">
            <div class="card-body">
                <form action="{{url('petugas/edit/'.$wg->id_petugas)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Edit Data Petugas</h1>
                    <div class="mb-3">
                        <label for="id_petugas" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id_petugas" value="{{$wg->id_petugas}}">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">USERNAME</label>
                        <input type="text" class="form-control" name="username" value="{{$wg->username}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">PASSWORD</label>
                        <input type="text" class="form-control" name="password" value="{{$wg->password}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_petugas" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama_petugas" value="{{$wg->nama_petugas}}">
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">LEVEL</label>
                        <input type="text" class="form-control" name="level" value="{{$wg->level}}">
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
