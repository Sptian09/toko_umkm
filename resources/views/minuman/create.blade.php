@extends('kerangka.master')
@section('content')
<div class="row match-height">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Minuman</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('minuman.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama_minuman">Nama Minuman</label>
                                        <input type="text" id="nama_minuman" name="nama_minuman"
                                            class="form-control @error('nama_minuman') is invalid
                                        @enderror"
                                            value="{{ old('nama_minuman') }}" placeholder="Nama Minuman">
                                        @error('nama_minuman')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="kategori_minuman">Kategori Minuman</label>
                                        <input type="text" id="kategori_minuman"
                                            class="form-control @error('kategori_minuman') is invalid
                                        @enderror"
                                            name="kategori_minuman" value="{{ old('kategori_minuman') }}" placeholder="Kategori Minuman">
                                        @error('kategori_minuman')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="harga_minuman">Harga Minuman</label>
                                        <input type="number" id="harga_minuman"
                                            class="form-control @error('harga_minuman') is invalid
                                        @enderror"
                                            name="harga_minuman" value="{{ old('harga_minuman') }}" placeholder="Harga Minuman">
                                        @error('harga_minuman')
                                            <div class="alert danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="text" id="stok"
                                            class="form-control @error('stok') is invalid
                                        @enderror"
                                            name="stok" value="{{ old('stok') }}" placeholder="Stok">
                                        @error('stok')
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
