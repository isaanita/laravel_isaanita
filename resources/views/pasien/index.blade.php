@extends('layouts.layout')

@section('title','Data Pasien')

@section('content')

<h3>Data Pasien</h3>

<div class="mb-3">
    <label>Filter Rumah Sakit:</label>
    <select id="filter-rs" class="form-select">
        <option value="">Semua</option>
        @foreach($rs as $r)
            <option value="{{ $r->id }}">{{ $r->nama }}</option>
        @endforeach
    </select>
</div>

<a href="/pasien/create" class="btn btn-primary mb-3">Tambah Pasien</a>

<table class="table table-bordered" id="tabelPasien">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Rumah Sakit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->telepon }}</td>
            <td>{{ $d->rumahSakit->nama }}</td>
            <td>
                <a href="/pasien/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <button data-id="{{ $d->id }}" class="btn btn-danger btn-sm btn-del">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('js')
<script>
$('#filter-rs').change(function(){
    let id = $(this).val();

    $.get("/pasien/filter", { rumah_sakit_id: id }, function(res){
        let rows = '';
        res.forEach(p => {
            rows += `
                <tr>
                    <td>${p.nama}</td>
                    <td>${p.alamat}</td>
                    <td>${p.telepon}</td>
                    <td>${p.rumah_sakit.nama}</td>
                    <td>
                        <a href="/pasien/${p.id}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm btn-del" data-id="${p.id}">Hapus</button>
                    </td>
                </tr>
            `;
        });

        $('#tabelPasien tbody').html(rows);
    });
});

$(document).on('click','.btn-del',function(){
    if(!confirm('Yakin hapus?')) return;

    $.ajax({
        url: "/delete-pasien/" + $(this).data('id'),
        type: "DELETE",
        data: { _token: "{{ csrf_token() }}" },
        success: function(){
            location.reload();
        }
    });
});
</script>
@endpush
