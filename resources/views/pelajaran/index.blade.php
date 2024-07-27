<h1>Data Mata Ajar</h1>
<a href="/pelajaran/add" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-striped table-hover text-center">
<thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">ID Pelajaran</th>
    <th scope="col">Nama Pelajaran</th>
    <th scope="col">ID Kurikulum</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
<?php 
$no=0;
 foreach ($pelajaran as $rows) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $rows->id_pelajaran?></td>
    <td><?php echo $rows->nama_pelajaran?></td>
    <td><?php echo $rows->id_kurikulum?></td>
    <td>
            <a href="{{ asset('pelajaran/edit/'.$rows->id_pelajaran) }}" class="btn btn-sm btn-primary">Edit</a> |
            <a href="{{ asset('pelajaran/delete/'.$rows->id_pelajaran) }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
</tr>
<?php
}
?>
</tbody>
</table>