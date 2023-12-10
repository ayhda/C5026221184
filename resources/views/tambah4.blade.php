@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Obat</h3>

        <a class="btn btn-danger mb-md-4" href="/obat">Kembali</a>
        <div class="container">
            <form action="/obat/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="merkobat" class="control-label col-sm-1">Merk Obat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="merkobat" name="merkobat">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockobat" class="control-label col-sm-1">Stock Obat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="stockobat" name="stockobat">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="control-label col-sm-1">Tersedia</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="tersedia" name="tersedia">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
