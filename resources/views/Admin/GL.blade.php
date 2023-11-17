@extends('Admin.LayoutAdmin')
@section('content')
    <form action="{{ url('#') }}" method="get">
        @csrf
        <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
            <h4 class="card-title">Laporan Pembayaran</h4>

        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID PEMBAYARAN</th>
                        <th>ID PETUGAS</th>
                        <th>NISN</th>
                        <th>TANGGAL BAYAR</th>
                        <th>BULAN DIBAYAR</th>
                        <th>TAHUN DIBAYAR</th>
                        <th>ID SPP</th>
                        <th>JUMLAH BAYAR</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->id_pembayaran }}</td>
                            <td>{{ $inem->id_petugas }}</td>
                            <td>{{ $inem->nisn }}</td>
                            <td>{{ $inem->tgl_bayar }}</td>
                            <td>{{ $inem->bulan_dibayar }}</td>
                            <td>{{ $inem->tahun_dibayar }}</td>
                            <td>{{ $inem->id_spp }}</td>
                            <td>{{ $inem->jumlah_bayar }}</td>
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
