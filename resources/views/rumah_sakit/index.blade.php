@extends('layouts.layout')

@section('title', 'Data Rumah Sakit')

@section('content')

<h3>Data Rumah Sakit</h3>

<a href="/rumah-sakit/create" class="btn btn-primary mb-3">Tambah</a>

<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Actions</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->alamat }}</td>
        <td>{{ $d->email }}</td>
        <td>{{ $d->telepon }}</td>
        <td>
            <a href="/rumah-sakit/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <button class="btn btn-danger btn-sm btn-del" data-id="{{ $d->id }}">Hapus</button>
        </td>
    </tr>
    @endforeach
</table>

@endsection

@push('js')
<script>
$('.btn-del').click(function(){
    if(!confirm('Yakin hapus?')) return;

    $.ajax({
        url: "/delete-rs/" + $(this).data('id'),
        type: "DELETE",
        data: { _token: "{{ csrf_token() }}" },
        success: function(){
            location.reload();
        }
    });
});
</script>
@endpush
