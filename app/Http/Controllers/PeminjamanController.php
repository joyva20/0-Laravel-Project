<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peminjaman;
use App\Models\DataPeminjam;
use App\Models\DataBuku;
use Illuminate\Support\Facades\Session;
class PeminjamanController extends Controller
{
    public function index(){
        $data_peminjaman = Peminjaman::all()->sortBy('id');
        $jumlah_peminjaman = $data_peminjaman->count();
        return view('peminjaman.index', compact('data_peminjaman','jumlah_peminjaman'));
    }

    public  function create(){
        $list_data_peminjam = DataPeminjam::pluck('nama_peminjam','id');
        $list_data_buku = DataBuku::pluck('judul_buku', 'id');
        return view('peminjaman.create', compact('list_data_peminjam', 'list_data_buku'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'kode_transaksi' => 'required|string',
            'id_peminjam' => 'required|string|max:30',
            'id_buku' => 'required|string'
        ]);
        $peminjaman = new Peminjaman;
        $peminjaman->kode_transaksi = $request->kode_transaksi;
        $peminjaman->id_peminjam = $request->id_peminjam;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->tgl_peminjaman = $request->tgl_peminjaman;
        $peminjaman->tgl_pengembalian = $request->tgl_pengembalian;
        $peminjaman->save();
        
        Session::flash('flash_message', 'Data peminjam berhasil disimpan');
        return redirect('peminjaman');
    }
    public function detail_peminjam($id){
        $halaman = 'data_peminjams';
        $data_peminjam = DataPeminjam::findOrFail($id);
        return view('peminjaman.detail_peminjam', compact('halaman', 'data_peminjam'));
    }

    public function detail_buku($id){
        $halaman = 'data_buku';
        $data_buku = DataBuku::findOrFail($id);
        return view('peminjaman.detail_buku', compact('halaman', 'data_buku'));
    }
}
