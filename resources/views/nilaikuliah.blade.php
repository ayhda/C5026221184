@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

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
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            {{-- <td>{{ $p->nilaikuliah_nilaihuruf }}</td>
            <td>{{ $p->nilaikuliah_bobot }}</td> --}}
            <td>
                @if ($p->NilaiAngka <= 40)
                D
                @elseif ($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60)
                C
                @elseif ($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80)
                B
                @else
                A
                @endif
            </td>
            <td> {{$p->NilaiAngka * $p->SKS}} </td>

		</tr>
		@endforeach
	</table>

    {{-- {{$nilaikuliah->links()}} --}}

    @endsection
