<h1>Tambah Data</h1>

<form action="{{ asset('ruang/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Ruang <br><input type="text" name="id_ruang"><br>
        Nama Ruang<br><input type="text" name="nama_ruang"><br>
        Kapasitas<br><input type="text" name="kapasitas"><br>
        <input type="submit" value="Kirim" value="submit">
    </div>

</form>
