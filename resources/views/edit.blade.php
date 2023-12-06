@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

    <a class="btn btn-danger mb-md-3 ml-3" href="/pegawai">Kembali</a>

    <form>
    <div class="container">
        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post"></form>
            {{ csrf_field() }}
            <div class="from-group row">
                <div class="col-sm-3">
                    <input type="hidden" name="id" value="{{$p -> pegawai_id}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="control-label col-sm-1">Nama</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="control-label col-sm-1">Jabatan</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="control-label col-sm-1">Umur</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="control-label col-sm-1">Alamat</label>
                <div class="col-sm-3">
                    <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <input type="submit" value="Simpan" class="btn btn-success">
        </form>
        @endforeach
    </div>
@endsection
