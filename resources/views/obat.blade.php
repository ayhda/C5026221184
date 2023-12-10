@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Obat</h3>

	<a href="/obat/tambah4" class="btn btn-success"> + Tambah Obat Baru</a>

	<br/>

	<p>Cari Data Obat :</p>
	<form action="/obat/cari" method="GET">
		<input class="form-control  mb-md-3" type="text" name="cari" placeholder="Cari Nama Obat"
        value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Obat</th>
			<th>Merk Obat</th>
			<th>Stock Obat</th>
			<th>Tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($obat as $p)
		<tr>
            <td>{{ $p->kodeobat }}</td>
			<td>{{ $p->merkobat }}</td>
			<td>{{ $p->stockobat }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/obat/view2/{{ $p->kodeobat }}" class="btn btn-success">View</a>
                |
				<a href="/obat/edit2/{{ $p->kodeobat }}" class="btn btn-warning">Edit</a>
                |
				<a href="/obat/hapus/{{ $p->kodeobat }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{$obat->links()}} --}}

    @endsection
