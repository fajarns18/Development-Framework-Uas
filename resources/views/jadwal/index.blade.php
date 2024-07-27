    <h1>Jadwal Kuliah</h1>
    <a href="/jadwal/add" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Jadwal</th>
                <th scope="col">Nama Pelajaran</th>
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $no=0;
        foreach ($jadwal as $rows) {
        $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $rows->id_jadwal_reski; ?></td>
                <td><?php echo $rows->nama_pelajaran_reski; ?></td>
                <td><?php echo $rows->waktu_reski; ?></td>
                <td>
                    <a href="{{ asset('jadwal/edit/' . $rows->id_jadwal_reski) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ asset('jadwal/delete/' . $rows->id_jadwal_reski) }}"
                        class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
