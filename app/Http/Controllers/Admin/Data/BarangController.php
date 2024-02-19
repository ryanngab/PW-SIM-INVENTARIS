<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index() {

        $barangs = Barang::all();
        $title = 'Data Barang';
        return view('Dashboard.Admin.Data.Barang.index',compact('title','barangs'));
    }

    public function create() {
        $title = 'Tambah Data Barang';
        return view('Dashboard.Admin.Data.Barang.add',compact('title'));
    }

    public function store(Request $request) {
        $tambahbarang = $request->validate([
            'nama_barang' => 'required',
            'jmlh_barang' => 'required',
            'kondisi_barang' => 'required',
        ]);

        Barang::create($tambahbarang);

        return redirect()->route('barang.index')->with('Berhasil','Goodjob');

    }

    public function edit() {
        $title = 'Edit Data Barang';
        return view('Dashboard.Admin.Data.Barang.edit',compact('title'));
    }
}
