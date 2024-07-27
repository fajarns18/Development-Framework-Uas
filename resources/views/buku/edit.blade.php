<h1>Edit Data</h1>
<table border="1" width="75%">

<form action="{{ asset('buku/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

<input type="hidden" name="id" value="<?php echo $rows->id ?>">
Id Buku<br><input type="text" name="id_buku" value="<?php echo $rows->id_buku ?>"><br>
Judul BUku<br><input type="text" name="judul_buku" value="<?php echo $rows->judul_buku ?>"><br>
Pengarang<br><input type="text" name="pengarang" value="<?php echo $rows->pengarang ?>"><br>
<input type="submit" value="Kirim" value="submit">
</form>