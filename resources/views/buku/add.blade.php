<h1>Tambah Data</h1>

<form action="{{ asset('buku/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

Id_Buku<br><input type="text" name="id_buku"><br>
Judul Buku<br><input type="text" name="judul_buku"><br>
pengarang<br><input type="text" name="pengarang"><br>
<input type="submit" value="Kirim" value="submit">

</form>