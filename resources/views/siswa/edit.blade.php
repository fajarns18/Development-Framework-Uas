<h1>Tambah Data</h1>

<form action="{{ asset('siswa/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

NIS<input type="text" name="nis" value="<?php echo $rows->nis ?>"><br>
Nama Siswa<input type="text" name="nama_siswa" value="<?php echo $rows->nama_siswa ?>"><br>
Alamat <input type="text" name="alamat" value="<?php echo $rows->alamat ?>"><br>
<input type="submit" value="Kirim" value="submit">
</form>