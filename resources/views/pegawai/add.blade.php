<h1>Tambah Data</h1>

<form action="{{ asset('pegawai/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="card col-6 p-3 d-flex">
    ID Pegawai<br><input type="text" name="id_pegawai"><br>
    Nama Pegawai<br><input type="text" name="nama_pegawai"><br>
    Alamat <br><input type="text" name="alamat"><br>
    <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
</div>
</form>