<h1>Edit Data</h1>

<form action="{{ asset('pelajaran/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Pelajaran<br><input type="text" name="id_pelajaran" value="<?php echo $rows->id_pelajaran; ?>"><br>
        Nama Pelajaran<br><input type="text" name="nama_pelajaran" value="<?php echo $rows->nama_pelajaran; ?>"><br>
        ID Kurikulum<br><input type="text" name="id_kurikulum" value="<?php echo $rows->id_kurikulum; ?>"><br>
        <input type="submit" value="Kirim" value="submit">
    </div>
</form>
