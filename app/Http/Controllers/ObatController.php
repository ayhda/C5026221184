<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ObatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$obat = DB::table('obat')->get();

        $obat = DB::table('obat')-> paginate(15);

    	// mengirim data pegawai ke view index
		return view('obat',['obat' => $obat]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah4');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('obat')->insert([
			'merkobat' => $request->merkobat,
			'stockobat' => $request->stockobat,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/obat');

	}

	// method untuk edit data pegawai
	public function edit($kodeobat)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$obat = DB::table('obat')->where('kodeobat',$kodeobat)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit2',['obat' => $obat]);

	}
// update data obat
public function update(Request $request)
{
    // update data obat
    DB::table('obat')->where('kodeobat', $request->kodeobat)->update([
        'merkobat' => $request->merkobat,
        'stockobat' => $request->stockobat,
        'tersedia' => $request->tersedia
    ]);
    // alihkan halaman ke halaman obat
    return redirect('/obat');
}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('obat')->where('kodeobat',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/obat');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$obat = DB::table('obat')
		->where('merkobat','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('obat',['obat' => $obat, 'cari' => $cari]);

	}

    public function view($id) {
        $obat = DB::table('obat')->where('kodeobat', $id)->get();
        return view('view2',['obat' => $obat]);
    }
}
