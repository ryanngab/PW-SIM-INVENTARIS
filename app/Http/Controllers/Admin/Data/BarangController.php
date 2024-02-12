<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index() {

        $title = 'Data Barang';
        return view('Dashboard.Admin.Data.Barang.index',compact('title'));
    }

    public function create() {
        $title = 'Tambah Data Barang';
        return view('Dashboard.Admin.Data.Barang.add',compact('title'));
    }

    public function edit() {
        $title = 'Edit Data Barang';
        return view('Dashboard.Admin.Data.Barang.edit',compact('title'));
    }
}
