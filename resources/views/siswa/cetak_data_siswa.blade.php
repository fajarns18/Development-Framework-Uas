<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
  <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 1px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
      /* font-size:14px; */
    }
    </style>
  
  <!-- <style type="text/css" media="print">
  @page { size: landscape; }
  </style> -->

</head>
<body onload="window.print()">
<table border='0' width='90%' align='center'>
  <tr >
    <td width='100' >No</td>
    <td width='10' >NIS</td>
    <td width='254' >Nama Siswa</td>
    <td width='105' >Alamat</td>
  </tr>

  <?php 
  $no=0;
  foreach ($siswa as $rows){
    $no++;
  ?>
  
  <tr>
    <td><?php echo "$no";?></td>
    <td><?php echo "$rows->nis";?></td>
    <td><?php echo "$rows->nama_siswa";?></td>
    <td><?php echo "$rows->alamat";?></td>
    <td><?php echo "$rows->alamat";?></td>
</tr>
  <?php 
    }
  ?>
</table>

</body>