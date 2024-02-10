<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //
    public function index() {
        $penggunas = User::all();
        $title = 'Data Pengguna';
        return view('Dashboard.Admin.Pengguna.index',compact('title','penggunas'));
    }

    
    public function create() {
        $title = 'Tambah Data Pengguna';
        return view('Dashboard.Admin.Pengguna.add',compact('title'));
    }

    public function edit() {
        $title = 'edit Data Pengguna';
        return view('Dashboard.Admin.Pengguna.edit',compact('title'));
    }
}
