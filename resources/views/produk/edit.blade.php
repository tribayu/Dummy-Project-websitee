@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #0d6efd, #0dcaf0);">
                    <h4 class="mb-0">✏️ Edit Produk</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Produk</label>
                            <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control rounded-pill" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="deskripsi" rows="3" class="form-control rounded-3">{{ $produk->deskripsi }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Harga</label>
                            <input type="text" name="harga" value="{{ number_format($produk->harga, 0, ',', '.') }}">

                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Stok</label>
                            <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control rounded-pill" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary rounded-pill px-4">⬅ Kembali</a>
                            <button class="btn btn-primary rounded-pill px-4 shadow-sm">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
