@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: 50rem;">
            <div class="card-body">
                <form action="{{ url('mclaren') }}" method="get" enctype="multipart/form-data">
                    @csrf
                    <h1>Entri Data Spp</h1>
                    <div class="mb-3">
                        <label for="id_spp" class="form-label">ID SPP</label>
                        <input type="text" class="form-control" name="id_spp">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">TAHUN</label>
                        <input type="text" class="form-control" name="tahun">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">NOMINAL</label>
                        <input type="text" class="form-control" name="nominal">
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
