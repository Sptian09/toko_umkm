@extends('kerangka.master')
@section('content')
<div class="row">
    <div class="col-md-10 col-12">
        <h4 class="fw-bold text-center">Daftar Menu Minuman</h4>
        <a class="btn btn-primary" href="{{ route('minuman.create') }}"> Tambah Minuman</a>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="table" id="table-minuman">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="min-width:100px;">Nama Minuman</th>
                            <th>Kategori Minuman</th>
                            <th style="min-width:100px;">Harga Minuman</th>
                            <th style="min-width:100px;">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($minuman as $minum)
                        <tr>
                            <td>{{ $minum->id }}</td>
                            <td>{{ $minum->nama_minuman }}</td>
                            <td>{{ $minum->kategori_minuman }}</td>
                            <td>{{ $minum->harga_minuman }}</td>
                            <td>{{ $minum->stok }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
