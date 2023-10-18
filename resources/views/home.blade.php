<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
<?php
    $koneksi= mysqli_connect("localhost", "root", "", "pelaporan_pengaduan_masyarakat");
    
  
    $query = $koneksi->query("SELECT * FROM Pengaduan");
   
?>
@include('layout.navbar')
</nav>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-light">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">id</th>
      <th scope="col">tanggal</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>

    </tr>
  <tbody>
    <?php while( $data = mysqli_fetch_array($query)) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $data['id_pengaduan'] ?></td>
      <td><?= $data['tgl_pengaduan'] ?></td>
      <td><?= $data['nik'] ?></td>
      <td><?= $data['isi_laporan'] ?></td>
      <td>
        <img src="longsor.jpg" style="height:80px; weight:80px;">
      </td>
      <td>diproses</td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</body>

</html>