<h1>Data Kurikulum</h1>
<a href="/kurikulum/add" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-striped table-hover text-center">
<thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">ID Kurikulum</th>
    <th scope="col">Nama Kurikulum</th>
    <th scope="col">ID Jurusan</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
        <tbody>
<?php 
$no=0;
 foreach ($kurikulum as $rows) {
$no++;
?>
<tr>
    <th><?php echo $no?></th>
    <td><?php echo $rows->id_kurikulum?></td>
    <td><?php echo $rows->nama_kurikulum?></td>
    <td><?php echo $rows->id_jurusan?></td>
    <td>
            <a href="{{ asset('kurikulum/edit/'.$rows->id_kurikulum) }}" class="btn btn-sm btn-primary" >Edit</a> |
            <a href="{{ asset('kurikulum/delete/'.$rows->id_kurikulum) }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
</tr>
<?php
}
?>
</tbody>
</table>