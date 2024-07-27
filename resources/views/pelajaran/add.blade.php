<h1>Tambah Data</h1>

<form action="{{ asset('pelajaran/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<div class="card col-6 p-3 d-flex">
    ID Pelajaran<br><input type="text" name="id_pelajaran"><br>
    Nama Pelajaran<br><input type="text" name="nama_pelajaran"><br>
    ID Kurikulum<br><input type="text" name="id_kurikulum"><br>
    <input class="" type="submit" value="Kirim" value="submit">
</div>
</form>