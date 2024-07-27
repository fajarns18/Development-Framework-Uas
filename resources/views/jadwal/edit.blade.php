<h1>Edit Data</h1>

<form action="{{ asset('jadwal/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Jadwal<br><input type="text" name="id_jadwal_reski" value="<?php echo $rows->id_jadwal_reski; ?>"><br>
        Nama Pelajaran<br><input type="text" name="nama_pelajaran_reski" value="<?php echo $rows->nama_pelajaran_reski; ?>"><br>
        Waktu<br><input type="text" name="waktu_reski" value="<?php echo $rows->waktu_reski; ?>"><br>
        <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
    </div>
</form>
