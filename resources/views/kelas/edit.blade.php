<h1>Edit Data</h1>

<form action="{{ asset('kelas/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Kelas<br><input type="text" name="id_kelas_reski" value="<?php echo $rows->id_kelas_reski; ?>"><br></td>
        Nama Kelas<br><input type="text" name="nama_kelas_reski" value="<?php echo $rows->nama_kelas_reski; ?>"><br></td>
        Lantai Kelas<br><input type="text" name="lantai_kelas_reski" value="<?php echo $rows->lantai_kelas_reski; ?>"><br></td>
        <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
    </div>
</form>
