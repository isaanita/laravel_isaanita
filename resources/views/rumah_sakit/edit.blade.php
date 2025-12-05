@extends('layouts.layout')

@section('title', 'Edit Rumah Sakit')

@section('content')

<h3>Edit Rumah Sakit</h3>

<form action="{{ url('/rumah-sakit/' . $rumahSakit->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Rumah Sakit</label>
        <input type="text" name="nama" value="{{ $rumahSakit->nama }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ $rumahSakit->alamat }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $rumahSakit->email }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Telepon</label>
        <input type="text" name="telepon" value="{{ $rumahSakit->telepon }}" class="form-control" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/rumah-sakit" class="btn btn-secondary">Kembali</a>

</form>

@endsection
