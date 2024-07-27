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
<center><h1>Biodata Siswa</h1></center>
<table border='0' width='90%' align='center'>
  <tr >
    <td width='200' >NIS</td>
    <td  >: <?php echo $siswa->nis; ?></td>
  </tr>
  <tr>  
    <td >Nama Siswa</td>
    <td >: <?php echo $siswa->nama_siswa; ?></td>
  </tr>
  <tr>  
    <td  >Alamat</td>
    <td >: <?php echo $siswa->alamat; ?></td>
  </tr>

</table>

</body>