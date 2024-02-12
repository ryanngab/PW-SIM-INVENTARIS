<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    //
    public function index() {

        $title = 'Data Ruangan';
        return view('Dashboard.Admin.Data.Ruangan.index',compact('title'));
    }

    public function create() {
        $title = 'Tambah Data Ruangan';
        return view('Dashboard.Admin.Data.Ruangan.add',compact('title'));
    }

    public function edit() {
        $title = 'Edit Data Ruangan';
        return view('Dashboard.Admin.Data.Ruangan.edit',compact('title'));
    }

}
