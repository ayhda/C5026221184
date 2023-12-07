<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function keranjangbelanja()
	{
    	// mengambil data dari table pegawai
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('keranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
