<h1>Data Pegawai</h1>
<a href="/pegawai/add" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-striped table-hover text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">IDPegawai</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <?php 
$no=0;
 foreach ($pegawai as $rows) {
$no++;
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $rows->id_pegawai; ?></td>
        <td><?php echo $rows->nama_pegawai; ?></td>
        <td><?php echo $rows->alamat; ?></td>
        <td>
            <a href="{{ asset('pegawai/edit/' . $rows->id_pegawai) }}" class="btn btn-sm btn-primary">Edit</a> |
            <a href="{{ asset('pegawai/delete/' . $rows->id_pegawai) }}" class="btn btn-sm btn-danger">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
    </tbody>
</table>
