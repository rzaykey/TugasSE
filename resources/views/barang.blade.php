@extends('layouts.app')
@section('content')
<title>Data Barang</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Data Barang</h3> 
                <div class="form-group">                    
                </div> 
                <br/> 
                        @if (Auth::user()->admin == 2) 
                        <table class="table table-bordered">
                            <tr>        
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Stock</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Opsi</th>
                            </tr>
                        @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->kode_barang }}</td>
                                <td>{{ $p->nama_barang }}</td>
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->harga_jual }}</td>
                                <td>{{ $p->harga_beli }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/barang/edit/{{ $p->kode_barang }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/barang/hapus/{{ $p->kode_barang }}">Hapus</a>
                            </td>
                            </tr>
                        @endforeach
                            <a class="btn btn-primary" href="/barang/tambah"> + Tambah Barang Baru</a>
                        </table>

                        @elseif (Auth::user()->admin == 1) 
                        <table class="table table-bordered">
                            <tr>        
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Stock</th>
                                <th>Harga Jual</th>
                                <th>Opsi</th>
                            </tr>
                        @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->kode_barang }}</td>
                                <td>{{ $p->nama_barang }}</td>
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->harga_jual }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/barang/edit/{{ $p->kode_barang }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/barang/hapus/{{ $p->kode_barang }}">Hapus</a>
                            </td>
                            </tr>
                        @endforeach
                            <a class="btn btn-primary" href="/barang/tambah"> + Tambah Barang Baru</a>
                        </table>

                        @else (Auth::user()->admin == 0) 
                        <table class="table table-bordered">
                            <tr>        
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Stock</th>
                                <th>Opsi</th>
                            </tr>
                        @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->kode_barang }}</td>
                                <td>{{ $p->nama_barang }}</td>
                                <td>{{ $p->stock }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/barang/edit/{{ $p->kode_barang }}">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/barang/hapus/{{ $p->kode_barang }}">Hapus</a>
                            </td>
                            </tr>
                        @endforeach
                            <a class="btn btn-primary" href="/barang/tambah"> + Tambah Barang Baru</a>
                        </table>
                        @endif
            </div>
                                <a class="btn btn-primary"  href="/"> Kembali</a>
        </div>
</div>
@endsection
