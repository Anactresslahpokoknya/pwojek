@extends('Admin.LayoutAdmin')
@section('content')
    <form action="" method="post">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $inem)
                        <tr>
                            <td>{{ $inem->nisn }}</td>
                            <td>{{ $inem->nis }}</td>
                            <td>{{ $inem->nama }}</td>
                            <td>{{ $inem->id_kelas }}</td>
                            <td>{{ $inem->alamat }}</td>
                            <td>{{ $inem->no_telp }}</td>
                            <td>{{ $inem->id_spp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection
