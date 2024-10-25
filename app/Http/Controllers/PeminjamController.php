<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjam;
use App\Models\Telepon;
class PeminjamController extends Controller
{
    public function lihat_data_peminjam(){
        $peminjam = ['Budiman',
                     'Maryono',
                     'Dina',
                     'Rusli'
    ];
    return view('peminjams/lihat_data_peminjam', compact('peminjam'));
    }
    public function store(request $request){
        $data_peminjam = new DataPeminjam;
        $data_peminjam->kode_peminjam = $request->kode_peminjam;
        $data_peminjam->nama_peminjam = $request->nama_peminjam;
        $data_peminjam->id_jenis_kelamin = $request->tanggal_lahir;
        $data_peminjam->alamat = $request->alamat;
        $data_peminjam->pekerjaan = $request->pekerjaan;
        $data_peminjam->save();

        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->telepon;
        $data_peminjam->telepon()->save($telepon);
        return redirect('data_peminjam');
    }

}