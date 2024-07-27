<h1>Data Nilai </h1>
<a href="/nilai/add" class="btn btn-success mb-3">Tambah Data</a>
<table class="table table-striped table-hover text-center">
<thead>
<tr >
    <th scope="col">No</th>
    <th scope="col">ID Nilai</th>
    <th scope="col">Nilai UTS</th>
    <th scope="col">Nilai Tugas</th>
    <th scope="col">Nilai Kehadiran</th>
    <th scope="col">Nilai UAS</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
        <tbody>

<?php 
$no=0;
 foreach ($nilai as $rows) {
$no++;
?>
<tr>
    <th><?php echo $no?></th>
    <td><?php echo $rows->id_nilai_reski?></td>
    <td><?php echo $rows->nilai_uts_reski?></td>
    <td><?php echo $rows->nilai_tugas_reski?></td>
    <td><?php echo $rows->nilai_kehadiran_reski?></td>
    <td><?php echo $rows->nilai_uas_reski?></td>
    <td>
            <a href="{{ asset('nilai/edit/'.$rows->id_nilai_reski) }}" class="btn btn-sm btn-primary">Edit</a> |
            <a href="{{ asset('nilai/delete/'.$rows->id_nilai_reski) }}" class="btn btn-sm btn-danger">Hapus</a>
    </th>
</tr>
<?php
}
?>
</tbody>
</table>