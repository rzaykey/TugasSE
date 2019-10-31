
<title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<div class="container">
        <div class="card">
            <div class="card-body">
			<h3>Tambah Barang</h3>
				<div class="form-group">
				</div>

                <table class="table table-bordered">
            <tr>
		<form action="/barang/store" method="post">
		{{ csrf_field() }}
		<td>Nama Barang <input type="text" name="nama_barang" required="required"></td>
		<td>Stock <input type="text" name="stock" required="required"> 
		</td>
		<td>Harga Jual <input type="number" name="harga_jual" required="required"></td>
		<td>Harga Beli <input type="number" name="harga_beli" required="required"></td>
		<td><input type="submit" value="Simpan Data"></td>
		</form>
 </tr>
</table>
            </div>                           
        </div>
        <a class="btn btn-primary"  href="/barang"> Kembali</a>
    </div>