<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('barang')->get();
 
    	// mengirim data barang ke view index
    	return view('barang',['barang' => $barang]);
 
    }
    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}
	public function store(Request $request)
{
	// insert data ke table barang
	DB::table('barang')->insert([
		'nama_barang' => $request->nama_barang,
		'stock' => $request->stock,
		'harga_jual' => $request->harga_jual,
		'harga_beli' => $request->harga_beli
	]);
	// alihkan halaman ke halaman barang
	return redirect('/barang');
}
// method untuk edit data barang
	public function edit($id)
{
	// mengambil data Barang berdasarkan id yang dipilih
	$barang = DB::table('barang')->where('kode_barang',$id)->get();
	// passing data barang yang didapat ke view edit.blade.php
	return view('edit',['barang' => $barang]);
}

// update data barang
public function update(Request $request)
{
	// update data barang
	DB::table('barang')->where('kode_barang',$request->id)->update([
		'nama_barang' => $request->nama,
		'stock' => $request->stock,
		'harga_jual' => $request->jual,
		'harga_beli' => $request->beli
	]);
	// alihkan halaman ke halaman barang
	return redirect('/barang');
}
// method untuk hapus data barang
public function hapus($id)
{
	// menghapus data barang berdasarkan id yang dipilih
	DB::table('barang')->where('kode_barang',$id)->delete();
		
	// alihkan halaman ke halaman barang
	return redirect('/barang');
}
}
