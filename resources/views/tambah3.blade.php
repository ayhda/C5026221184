@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Keranjang</h3>

        <a class="btn btn-danger mb-md-4" href="/keranjangbelanja">Kembali</a>
        <div class="container">
            <form action="/keranjangbelanja/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="KodeBarang" class="control-label col-sm-1">Kode Barang</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="control-label col-sm-1">Jumlah Pembelian</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="Harga" class="control-label col-sm-1">Harga per item</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Harga" name="Harga">
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-success">
	</form>

@endsection
