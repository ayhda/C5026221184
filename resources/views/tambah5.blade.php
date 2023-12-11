@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h3>Data Karyawan</h3>

        <a class="btn btn-danger mb-md-4" href="/karyawan">Kembali</a>


        <div class="container">
            <form action="/karyawan/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodepegawai" class="control-label col-sm-1">Kode Pegawai</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="kodepegawai" placeholder="Kode Pegawai" name="kodepegawai">
                    @error('kodepegawai')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="control-label col-sm-1">Nama Lengkap</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi" class="control-label col-sm-1">Divisi</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="divisi" placeholder="Divisi" name="divisi">
                </div>
            </div>
            <div class="form-group row">
                <label for="departemen" class="control-label col-sm-1">Departemen</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="departemen" placeholder="Departemen" name="departemen">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
