@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h3>View Pegawai</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 border">

            </div>

            <div class="col-md-4">
                @foreach ($pegawai as $p)
                    <table class="table table-borderless">
                        <tr>
                            <td>ID</td>
                            <td>{{ $p->pegawai_id }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $p->pegawai_nama }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>{{ $p->pegawai_jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>{{ $p->pegawai_umur }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                        </tr>
                    </table>
                @endforeach
                <br/>
            <a href="/pegawai" class="btn btn-success">OK</a>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

@endsection
