<h1>Data Kelas</h1>
<a href="/kelas/add" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-striped table-hover text-center" >
<thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">ID Kelas</th>
    <th scope="col">Nama Kelas</th>
    <th scope="col">Lantai Kelas</th>
    <th scope="col">Aksi</th>
</tr>
    </thead>
        <tbody>

<?php 
$no=0;
 foreach ($kelas as $rows) {
$no++;
?>
<tr>
    <th><?php echo $no?></th>
    <td><?php echo $rows->id_kelas_reski?></td>
    <td><?php echo $rows->nama_kelas_reski?></td>
    <td><?php echo $rows->lantai_kelas_reski?></td>
    <td>
            <a href="{{ asset('kelas/edit/'.$rows->id_kelas_reski) }}" class="btn btn-sm btn-primary">Edit</a> |
            <a href="{{ asset('kelas/delete/'.$rows->id_kelas_reski) }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
</tr>
<?php
}
?>
</tbody>
</table>