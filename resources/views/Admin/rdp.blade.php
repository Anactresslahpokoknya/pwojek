@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: 50rem;">
            <div class="card-body">
                <form action="{{ url('max') }}" method="get" enctype="multipart/form-data">
                    @csrf
                    <h1>Entri Data Petugas</h1>
                    <div class="mb-3">
                        <label for="username" class="form-label">USERNAME</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="nama_petugas" class="form-label">NAMA PETUGAS</label>
                        <input type="nama_petugas" class="form-control" name="nama_petugas">
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">LEVEL</label>
                        <div class="col-10">
                            <select class="form-select" id="" name="level">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
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
