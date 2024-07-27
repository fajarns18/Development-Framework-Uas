<h1>Tambah Data</h1>

<form action="{{ asset('pegawai/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Pegawai<input type="text" name="id_pegawai" value="<?php echo $rows->id_pegawai; ?>"><br>
        Nama Pegawai<input type="text" name="nama_pegawai" value="<?php echo $rows->nama_pegawai; ?>"><br>
        Alamat <input type="text" name="alamat" value="<?php echo $rows->alamat; ?>"><br>
        <input type="submit" value="Kirim" value="submit">
    </div>

</form>
