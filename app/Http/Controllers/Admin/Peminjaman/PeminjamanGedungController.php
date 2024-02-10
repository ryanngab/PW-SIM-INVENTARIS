<?php

namespace App\Http\Controllers\Admin\Peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanGedungController extends Controller
{
    //
    public function index() {

        $title = 'Data Peminjaman Gedung';
        return view('Dashboard.Admin.Peminjaman.Gedung.index',compact('title'));
    }
}
