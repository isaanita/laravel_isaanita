@extends('layouts.layout')

@section('title','Edit Pasien')

@section('content')

<h3>Edit Pasien</h3>

<form method="POST" action="/pasien/{{ $pasien->id }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{ $pasien->alamat }}" required>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{ $pasien->telepon }}" required>
    </div>

    <div class="mb-3">
        <label>Rumah Sakit</label>
        <select name="rumah_sakit_id" class="form-select">
            @foreach($rs as $r)
                <option value="{{ $r->id }}" {{ $pasien->rumah_sakit_id == $r->id ? 'selected':'' }}>
                    {{ $r->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/pasien" class="btn btn-secondary">Kembali</a>
</form>

@endsection
