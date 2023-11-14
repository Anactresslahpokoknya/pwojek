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
                        <th>ID PETUGAS</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>NAMA PETUGAS</th>
                        <th>LEVEL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wg as $inem)
                        <tr>
                            <td>{{ $inem->id_petugas }}</td>
                            <td>{{ $inem->username }}</td>
                            <td>{{ $inem->password }}</td>
                            <td>{{ $inem->nama_petugas }}</td>
                            <td>{{ $inem->level }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection