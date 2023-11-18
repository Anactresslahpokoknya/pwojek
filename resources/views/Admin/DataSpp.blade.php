@extends('Admin.LayoutAdmin')
@section('content')
    <form action="{{ url('laren') }}" method="get">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Data Spp</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID SPP</th>
                        <th>TAHUN</th>
                        <th>NOMINAL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->id_spp }}</td>
                            <td>{{ $inem->tahun }}</td>
                            <td>{{ $inem->nominal }}</td>
                            <td><a href="#" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a></td>
                            <td><a href="{{url('spp/hapus/'.$inem->id_spp)}}" class="btn btn-danger btn-sm">
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
