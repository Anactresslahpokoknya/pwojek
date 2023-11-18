@extends('Admin.LayoutAdmin')
@section('content')
    <form action="{{ url('vv') }}" method="get">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Data Petugas</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID PETUGAS</th>
                        <th>NAMA PETUGAS</th>
                        <th>LEVEL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->id_petugas }}</td>
                            <td>{{ $inem->nama_petugas }}</td>
                            <td>{{ $inem->level }}</td>
                            <td><a href="#" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a></td>
                            <td><a href="{{url('petugas/hapus/'.$inem->id_petugas)}}" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash-fill"></i>
                            </a></td>
                            <td>
                                <div class="mb-3">
                                    <button class="btn form-control btn-primary mb-2">tambah</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
