<h1>Edit Data</h1>

<form action="{{ asset('ruang/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}

    <input type="hidden" name="id" value="<?php echo $rows->id; ?>">
    ID Ruang<input type="text" name="id_ruang" value="<?php echo $rows->id_ruang; ?>"><br>
    Nama Ruang<input type="text" name="nama_ruang" value="<?php echo $rows->nama_ruang; ?>"><br>
    Kapasistas <input type="text" name="kapasitas" value="<?php echo $rows->kapasitas; ?>"><br>
    <input type="submit" value="Kirim" value="submit">
</form>
