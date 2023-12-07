@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai</h3>

        <a class="btn btn-danger mb-md-4" href="/nilaikuliah">Kembali</a>
        <div class="container">
            <form action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="NRP" class="control-label col-sm-1">NRP</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="NRP" name="NRP">
                </div>
            </div>
            <div class="form-group row">
                <label for="NilaiAngka" class="control-label col-sm-1">Nilai Angka</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
                </div>
            </div>
            <div class="form-group row">
                <label for="SKS" class="control-label col-sm-1">SKS</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="SKS" name="SKS">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
