<h1>Tambah Data</h1>
<table border="1" width="75%">

    <form action="{{ asset('guru/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        {{ csrf_field() }}
        <div class="card col-6 p-3 d-flex">
            NIP<br><input type="text" name="nip" value="<?php echo $rows->nip; ?>"><br>
            Nama Pegawai<br><input type="text" name="nama_pegawai" value="<?php echo $rows->nama_pegawai; ?>"><br>
            Alamat<br><input type="text" name="alamat" value="<?php echo $rows->alamat; ?>"><br>
            <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
        </div>

    </form>
