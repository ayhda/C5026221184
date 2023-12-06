@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

        <a class="btn btn-danger mb-md-4" href="/pegawai">Kembali</a>
        <div class="container">
            <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="control-label col-sm-1">Nama</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="control-label col-sm-1">Jabatan</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="control-label col-sm-1">Umur</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="umur" name="umur">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="control-label col-sm-1">Alamat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
