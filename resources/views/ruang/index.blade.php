<h1>Data Ruang</h1>
<a href="/ruang/add">Tambah Data</a>
<table class="table bg-white rounded shadow table-hover table-bordered border-secondary text-center">
<thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">ID Ruang</th>
    <th scope="col">Nama Ruang</th>
    <th scope="col">Kapasitas</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
<?php 
$no=0;
 foreach ($ruang as $rows) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $rows->id_ruang?></td>
    <td><?php echo $rows->nama_ruang?></td>
    <td><?php echo $rows->kapasitas?></td>
    <td>
            <a href="{{ asset('ruang/edit/'.$rows->id) }}">Edit</a> |
            <a href="{{ asset('ruang/delete/'.$rows->id) }}">Del</a>
            </td>
</tr>
<?php
}
?>
</tbody>
</table>