<h1>Tambah Data</h1>

<form action="{{ asset('guru/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        NIP<br><input class="form-control" type="text" name="nip"><br>
        Nama Pegawai<br><input class="form-control" type="text" name="nama_pegawai"><br>
        Alamat<br><input class="form-control" type="text" name="alamat"><br>
        <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
    </div>

</form>
