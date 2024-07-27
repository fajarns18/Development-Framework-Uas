<h1>Data Siswa</h1>
<a href="/siswa/add" class="btn btn-primary">Tambah Data</a>
<a href="/siswa/cetak_siswa" target="_BLANK" class="btn btn-secondary">Cetak Data</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=0;
    foreach ($siswa as $rows) {
    $no++;
    ?>
    <tr>
      <td><?php echo $no?></td>
      <td><?php echo $rows->nis?></td>
      <td><?php echo $rows->nama_siswa?></td>
      <td><?php echo $rows->alamat?></td>
      <td>
        <a href="{{ asset('siswa/edit/'.$rows->nis) }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ asset('siswa/delete/'.$rows->nis) }}" class="btn btn-sm btn-danger">Hapus</a>
        <a href="{{ asset('siswa/cetak_biodata/'.$rows->nis) }}" target="_BLANK" class="btn btn-sm btn-info">Cetak Bio</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
