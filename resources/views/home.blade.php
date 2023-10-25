@extends('layouts.app')

@section('content')
    <h1>{{ $judul }}</h1>
    <h2>{{auth()->user()->usename}}</h2>
    <table class="table table-bordered">
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