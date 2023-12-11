<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanEASController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data pegawai ke view index
		return view('karyawan',['karyawan' => $karyawan]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah5');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
{
    $request->validate([
        'kodepegawai' => 'required|unique:karyawan',
        'namalengkap' => 'required',
        'divisi' => 'required',
        'departemen' => 'required',
    ], [
        'kodepegawai.unique' => 'Kode Pegawai sudah ada di tabel.',
    ]);


    // Insert data into the 'karyawan' table
    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen,
    ]);

    // Redirect to the 'karyawan' page
    return redirect('/karyawan')->with('success', 'Data Pegawai berhasil ditambahkan');
}


	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
}
