@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: rem;">
            <div class="card-body">
                <form action="{{url('pembayaran/edit/'.$wg->id_pembayaran)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Edit Data Pembayaran</h1>
                    <div class="mb-3">
                        <label for="id_petugas" class="form-label">ID PETUGAS</label>
                        <input type="text" class="form-control" name="id_petugas" value="{{$wg->id_petugas}}">
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="nisn" value="{{$wg->nisn}}">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_bayar" class="form-label">TANGGAL BAYAR</label>
                        <input type="text" class="form-control" name="tgl_bayar" value="{{$wg->tgl_bayar}}">
                    </div>
                    <div class="mb-3">
                        <label for="bulan_dibayar" class="form-label">BULAN DIBAYAR</label>
                        <input type="text" class="form-control" name="bulan_dibayar" value="{{$wg->bulan_dibayar}}">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_dibayar" class="form-label">TAHUN DIBAYAR</label>
                        <input type="text" class="form-control" name="tahun_dibayar" value="{{$wg->tahun_dibayar}}">
                    </div>
                    <div class="mb-3">
                        <label for="id_spp" class="form-label">ID SPP</label>
                        <input type="text" class="form-control" name="id_spp" value="{{$wg->id_spp}}">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_bayar" class="form-label"> JUMLAH BAYAR</label>
                        <input type="text" class="form-control" name="jumlah_bayar" value="{{$wg->jumlah_bayar}}">
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
