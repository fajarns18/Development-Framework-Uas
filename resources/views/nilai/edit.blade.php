<h1>Edit Data</h1>

<form action="{{ asset('nilai/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card col-6 p-3 d-flex">

        ID Nilai<br><input type="text" name="id_nilai_reski" value="<?php echo $rows->id_nilai_reski; ?>"><br>
        Nilai UTS<br><input type="text" name="nilai_uts_reski" value="<?php echo $rows->nilai_uts_reski; ?>"><br>
        Nilai Tugas<br><input type="text" name="nilai_tugas_reski" value="<?php echo $rows->nilai_tugas_reski; ?>"><br>
        Nilai Kehadiran<br><input type="text" name="nilai_kehadiran_reski" value="<?php echo $rows->nilai_kehadiran_reski; ?>"><br>
        Nilai UAS<br><input type="text" name="nilai_uas_reski" value="<?php echo $rows->nilai_uas_reski; ?>"><br>
        <input class="btn btn-primary col-md-3" type="submit" value="Kirim" value="submit">
    </div>
</form>
