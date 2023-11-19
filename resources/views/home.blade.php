<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
@extends('layout.app')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">TGL</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pengaduan as $pengaduan)
      <tr>
        <td>{{ $pengaduan->tgl_pengaduan }}</td>
        <td>{{ $pengaduan->nik }}</td>
        <td>{{ $pengaduan->isi_laporan }}</td>
        <td><img width="200px" src='{{asset("storage/images/$pengaduan->foto")}}' /></td>
        <td><a href="#" class="btn btn-danger">Hapus</a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection
</body>
</html>