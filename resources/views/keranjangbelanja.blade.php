@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/tambah" class="btn btn-success">Beli</a>

	<br/>

	{{-- <p>Cari Data Nilai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control  mb-md-3" type="text" name="cari" placeholder="Cari Nama Pegawai .."
        value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form> --}}

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ number_format($p->Harga, 2, '.', ',') }}</td>
            <td> {{number_format($p->Jumlah * $p->Harga, 2, '.', ',')}} </td>
            <td>
                <a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
            </td>

		</tr>
		@endforeach
	</table>

    @endsection
