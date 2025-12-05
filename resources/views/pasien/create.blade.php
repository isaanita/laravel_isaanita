@extends('layouts.layout')

@section('title', 'Tambah Pasien')

@section('content')

<h3>Tambah Pasien</h3>

<form method="POST" action="/pasien">
    @csrf

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="telepon" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Rumah Sakit</label>
        <select name="rumah_sakit_id" class="form-select">
            @foreach($rs as $r)
                <option value="{{ $r->id }}">{{ $r->nama }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="/pasien" class="btn btn-secondary">Kembali</a>
</form>

@endsection
