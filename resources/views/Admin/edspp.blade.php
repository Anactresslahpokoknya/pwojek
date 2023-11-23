@extends('Admin.LayoutAdmin')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-10000">
        <div class="card pt-4" style="width: rem;">
            <div class="card-body">
                <form action="{{url('spp/edit/'.$wg->id_spp)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Edit Data Kelas</h1>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">TAHUN</label>
                        <input type="text" class="form-control" name="tahun" value="{{$wg->tahun}}">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">NOMINAL</label>
                        <input type="text" class="form-control" name="nominal" value="{{$wg->nominal}}">
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
