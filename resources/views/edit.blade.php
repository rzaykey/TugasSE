
<title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<div class="container">
        <div class="card">
            <div class="card-body">

				<h3>Edit Barang</h3>
				<div class="form-group">
				</div>
                <table class="table table-bordered">
                <tr>
	@foreach($barang as $p)
		<form action="/barang/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kode_barang }}"> <br/>
		<td>Nama <input type="text" required="required" name="nama" value="{{ $p->nama_barang }}"> <br/></td>
		<td>Stock <input type="text" required="required" name="stock" value="{{ $p->stock }}"> <br/></td>
		<td>Harga Jual <input type="number" required="required" name="jual" value="{{ $p->harga_jual }}"> <br/></td>
		<td>Harga Beli <input type="number" required="required" name="beli" value="{{ $p->harga_beli }}"> <br/></td>
		<td> <input type="submit" class="btn btn-primary" value="Simpan Data"></td>
	</form>
	@endforeach
</tr>
                </table>
            </div>
                                                    <a class="btn btn-primary"  href="/barang"> Kembali</a>
        </div>
    </div>

