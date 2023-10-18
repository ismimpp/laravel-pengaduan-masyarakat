<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    function tampil_about($id){
        echo "ini halaman about di Controller Pengaduan id : $id";
    }


   function index(){
    $judul = "Selamat Datang";
    // query builder
   // $pengaduan = DB::table('pengaduan')->get();
    //Elloquent ORM
    $pengaduan = pengaduan::all();


    return view('home', ['judul' => $judul, 'pengaduan' => $pengaduan]);
   }

  function tampil_pengaduan(){
    return view('isi_pengaduan');
  }


  function proses_tambah_pengaduan (Request $request){
  $nama_foto = $request->foto->getClientOriginalName();
    $request->validate([
      'isi_laporan' => 'required|min:2'
    ]);

    // nyimpen foto / mindahin file
    $request->foto->storeAs('public/image', $nama_foto);

      // $isi_pengaduan = $_POST['isi_laporan'];
      $isi_pengaduan = $request->isi_laporan;

      DB::table('pengaduan')->insert([
        'tgl_pengaduan' => date('Y-m-d'),
        'nik' => '123',
        'isi_laporan' => $isi_pengaduan,
        'foto' => $request->foto->getClientOriginalName(), // mendapatkan foto
        'status' => '0'
    ]);

    return redirect('/home');
  }

  function hapus($id){
    DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();

    return redirect()->back();
  }

  function detail_pengaduan($id){
    $pengaduan = DB::table('pengaduan')
                ->where('id_pengaduan', '=', $id)
                ->first();
    $pengaduan = pengaduan :: where('id_pengaduan', $id);
    return view("detail_pengaduan", ["data" => $pengaduan]);

 }
function update($id){
  $affected = DB::table('pengaduan')
    ->where('id_pengaduan', $id)
    ->update(['isi_laporan' => "isi laporan di update"]);
}
}