@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h5 class="mb-0 fw-bold">Tambah Produk</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('produk.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text" name="nama" class="form-control form-control-lg" placeholder="Masukkan nama produk" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control form-control-lg" placeholder="Tuliskan deskripsi produk" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Harga</label>
                                <input type="text" name="harga"
                                    value="{{ old('harga') }}"
                                    class="form-control form-control-lg"
                                    placeholder="Masukkan harga">

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Stok</label>
                                <input type="number" name="stok" class="form-control form-control-lg" placeholder="Jumlah stok" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-success px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
