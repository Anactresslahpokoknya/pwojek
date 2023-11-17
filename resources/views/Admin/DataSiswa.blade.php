@extends('Admin.LayoutAdmin')
@section('content')
    <form action="{{ url('#') }}" method="get">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Data Siswa</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>ID KELAS</th>
                        <th>ALAMAT</th>
                        <th>TELEPON</th>
                        <th>ID SPP</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->nisn }}</td>
                            <td>{{ $inem->nis }}</td>
                            <td>{{ $inem->nama }}</td>
                            <td>{{ $inem->id_kelas }}</td>
                            <td>{{ $inem->alamat }}</td>
                            <td>{{ $inem->no_telp }}</td>
                            <td>{{ $inem->id_spp }}</td>
                            <td><a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a></td>
                                <td><a href="{{url('siswa/hapus/'.$inem->nisn)}}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
