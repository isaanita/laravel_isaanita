@extends('layouts.layout')

@section('title', 'Tambah Rumah Sakit')

@section('content')

<h3>Tambah Rumah Sakit</h3>

<form action="/rumah-sakit" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Rumah Sakit</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="/rumah-sakit" class="btn btn-secondary">Kembali</a>

</form>

@endsection
