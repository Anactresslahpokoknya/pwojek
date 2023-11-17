@extends('Admin.LayoutAdmin')
@section('content')
    <form action="{{ url('#') }}" method="get">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Data Petugas</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID KELAS</th>
                        <th>NAMA KELAS</th>
                        <th>KOMPETENSI KEAHLIAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->id_kelas }}</td>
                            <td>{{ $inem->nama_kelas }}</td>
                            <td>{{ $inem->kompetensi_keahlian }}</td>
                            <td><a href="#" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a></td>
                            <td><a href="#" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash-fill"></i>
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
