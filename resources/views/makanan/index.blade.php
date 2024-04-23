@extends('kerangka.master')
{{-- @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Daftar Makanan</h2>
        </div>
        <div class="pull-right" style="margin-bottom: 10px;">
            <a class="btn btn-success"> Tambah Makanan</a>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
    <div class="row">
        <div class="col-md-10 col-12">
            <h4 class="fw-bold text-center">Daftar Menu Makanan</h4>
            <a class="btn btn-primary" href="{{ route('makanan.tambah') }}">Tambah Makanan</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="table" id="table-makanan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="min-width:100px;">Nama Makanan</th>
                                <th>Kategori Makanan</th>
                                <th style="min-width:100px;">Harga Makanan</th>
                                <th style="min-width:100px;">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makanan as $db)
                            <tr>
                                <td>{{ $db->id }}</td>
                                <td>{{ $db->nama_makanan }}</td>
                                <td>{{ $db->kategori_makanan }}</td>
                                <td>{{ $db->harga_makanan }}</td>
                                <td>{{ $db->deskripsi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
