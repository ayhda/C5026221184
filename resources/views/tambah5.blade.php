@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Karyawan</h3>

        <a class="btn btn-danger mb-md-4" href="/karyawan">Kembali</a>
        <div class="container">
            <form action="/karyawan/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodepegawai" class="control-label col-sm-1">Kode Pegawai</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="control-label col-sm-1">Nama Lengkap</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi" class="control-label col-sm-1">Divisi</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="divisi" name="divisi">
                </div>
            </div>
            <div class="form-group row">
                <label for="departemen" class="control-label col-sm-1">Departemen</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="departemen" name="departemen">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
