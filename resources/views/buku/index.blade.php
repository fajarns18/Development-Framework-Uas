<h1>Data Buku</h1>
<a href="/buku/add">Tambah Data</a>
<table class="table bg-white rounded shadow-sm  table-hover">
<thead>
<tr style= "color:white;background:red">
    <th scope="col">No</th>
    <th scope="col">ID Buku</th>
    <th scope="col">Judul Buku/th>
    <th scope="col">Pengarang</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
<?php 
$no=0;
 foreach ($buku as $rows) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $rows->id_buku?></td>
    <td><?php echo $rows->judul_buku?></td>
    <td><?php echo $rows->pengarang?></td>
    <td>
            <a href="{{ asset('buku/edit/'.$rows->id) }}">Edit</a> |
            <a href="{{ asset('buku/delete/'.$rows->id) }}">Del</a>
            </td>
</tr>
<?php
}
?>
</tbody>
</table>