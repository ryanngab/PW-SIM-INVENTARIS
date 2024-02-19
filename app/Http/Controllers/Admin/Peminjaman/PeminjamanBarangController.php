<?php

namespace App\Http\Controllers\Admin\Peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanBarangController extends Controller
{
    //
    public function index() {

        $title = 'Data Peminjaman Barang';
        return view('Dashboard.Admin.Peminjaman.Barang.index',compact('title'));
    }

    public function create() {

        $title = 'Pinjam Barang';
        return view('Dashboard.Admin.Peminjaman.Barang.add',compact('title'));
    }

    public function edit() {

        $title = 'Pinjam Barang';
        return view('Dashboard.Admin.Peminjaman.Barang.add',compact('title'));
    }
}
