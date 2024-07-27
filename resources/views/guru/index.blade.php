<h1>Data Guru</h1>
<a href="/guru/add" class="btn btn-success mb-3">Tambah Data</a>


<table class="table table-striped table-hover text-center">
    <thead>
        <tr>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>

        </tr>
    </thead>
    <tbody>

        <?php
        $no = 0;
        foreach ($guru as $row) {
            $no++;
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row->nip ?></td>
                <td><?php echo $row->nama_pegawai ?></td>
                <td><?php echo $row->alamat ?></td>
                <td></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>