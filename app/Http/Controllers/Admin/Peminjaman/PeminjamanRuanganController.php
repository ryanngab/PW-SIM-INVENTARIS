<?php

namespace App\Http\Controllers\Admin\Peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanRuanganController extends Controller
{
    //
    public function index() {

        $title = 'Data Peminjaman Ruangan';
        return view('Dashboard.Admin.Peminjaman.Ruangan.index',compact('title'));
    }
}
