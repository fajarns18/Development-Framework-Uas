<h1>Tambah Data</h1>

<form action="{{ asset('kelas/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">
        ID Kelas<br><input type="text" name="id_kelas_reski"><br>
        Nama Kelas<br><input type="text" name="nama_kelas_reski"><br>
        Lantai Kelas<br><input type="text" name="lantai_kelas_reski"><br>
        <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
    </div>
</form>
