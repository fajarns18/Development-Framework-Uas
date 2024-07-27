<h1>Tambah Data</h1>

<form action="{{ asset('siswa/add_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<table id="example2" class="table bg-white rounded shadow table-hover table-bordered border-secondary text-center">
<tr>
    <td width="220px">NIS</td><td><input class="form-control" type="text" name="nis"></td>
</tr> 

<tr>
    <td>
Nama Siswa</td><td><input class="form-control" type="text" name="nama_siswa"></td>
</tr>


<tr>
<td>Alamat </td><td><input class="form-control" type="text" name="alamat"></td>
</tr>

<tr>

<td colspan="2"><input type="submit" class="btn btn-primary btn-sm" value="Kirim" value="submit">
</td>
</tr>

</form>
</table>