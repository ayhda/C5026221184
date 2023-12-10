@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h3>View Obat</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 border">

            </div>

            <div class="col-md-4">
                @foreach ($obat as $p)
                    <table class="table table-borderless">
                        <tr>
                            <td>Kode Obat</td>
                            <td>{{ $p->kodeobat }}</td>
                        </tr>
                        <tr>
                            <td>Merk Obat</td>
                            <td>{{ $p->merkobat }}</td>
                        </tr>
                        <tr>
                            <td>Stock Obat</td>
                            <td>{{ $p->stockobat }}</td>
                        </tr>
                        <tr>
                            <td>Tersedia</td>
                            <td>{{ $p->tersedia }}</td>
                        </tr>
                    </table>
                @endforeach
                <br/>
            <a href="/obat" class="btn btn-success">OK</a>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

@endsection
