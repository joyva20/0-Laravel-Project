@extends('layout.master')

@section('content')
<div class="container">
    <h4>Data Peminjam</h4>
    <p align="right">
        <a href="{{ route('data_peminjam.create') }}" class="btn btn-primary">Tambah Data Peminjam</a>
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Peminjam</th>
                <th>Nama Peminjam</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Nomor Telepon</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_peminjam as $peminjam)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peminjam->kode_peminjam }}</td>
                <td>{{ $peminjam->nama_peminjam }}</td>
                <td>{{ $peminjam->jenis_kelamin }}</td>
                <td>{{ $peminjam->tanggal_lahir }}</td>
                <td>{{ $peminjam->alamat }}</td>
                <td>{{ $peminjam->pekerjaan }}</td>
                <td>{{ !empty($peminjam->telepon['nomor_telepon'])?
                    $peminjam->telepon['nomor_telepon'] : '-'
                }}
                <td>
                    <a href="{{ route('data_peminjam.edit', $peminjam->id) }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="{{ route('data_peminjam.destroy', $peminjam->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger" onclick=" return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-left">
        Jumlah Peminjam : {{ $jumlah_peminjam }}
    </div>
</div>
@endsection