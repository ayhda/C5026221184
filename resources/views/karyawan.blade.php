@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Karyawan</h3>

	<br/>

	{{-- <p>Cari Data Karyawan :</p>
	<form action="/obat/cari" method="GET">
		<input class="form-control  mb-md-3" type="text" name="cari" placeholder="Cari Nama Obat"
        value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form> --}}

	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
            <td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td>{{ strtolower($p->divisi) }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{$obat->links()}} --}}
    <a href="/karyawan/tambah5" class="btn btn-success"> + Tambah Karyawan Baru</a>


    @endsection
