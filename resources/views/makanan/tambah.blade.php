@extends('kerangka.master')
@section('content')
<div class="row match-height">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Makanan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('makanan.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama_makanan">Nama Makanan</label>
                                        <input type="text" id="nama_makanan" name="nama_makanan"
                                            class="form-control @error('nama_makanan') is invalid
                                        @enderror"
                                            value="{{ old('nama_makanan') }}" placeholder="Nama Makanan">
                                        @error('nama_makanan')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="kategori_makanan">Kategori Makanan</label>
                                        <input type="text" id="kategori_makanan"
                                            class="form-control @error('kategori_makanan') is invalid
                                        @enderror"
                                            name="kategori_makanan" value="{{ old('kategori_makanan') }}" placeholder="Kategori Makanan">
                                        @error('kategori_makanan')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="harga_makanan">Harga Makanan</label>
                                        <input type="number" id="harga_makanan"
                                            class="form-control @error('harga_makanan') is invalid
                                        @enderror"
                                            name="harga_makanan" value="{{ old('harga_makanan') }}" placeholder="Harga Makanan">
                                        @error('harga_makanan')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" id="deskripsi"
                                            class="form-control @error('dekripsi') is invalid
                                        @enderror"
                                            name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Deskripsi">
                                        @error('deskripsi')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
