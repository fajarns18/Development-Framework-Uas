<h1>Tambah Data Kurikulum</h1>

<form action="{{ asset('kurikulum/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="card col-6 p-3 d-flex">
    ID Kurikulum<br><input type="text" name="id_kurikulum"><br>
    Nama Kurikulum<br><input type="text" name="nama_kurikulum"><br>
    ID Jurusan<br><input type="text" name="id_jurusan"><br>
    <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
</div>
</form>