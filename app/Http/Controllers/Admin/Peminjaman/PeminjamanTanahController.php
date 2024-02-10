<?php

namespace App\Http\Controllers\Admin\Peminjaman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanTanahController extends Controller
{
    //
    public function index() {

        $title = 'Data Peminjaman Tanah';
        return view('Dashboard.Admin.Peminjaman.Tanah.index',compact('title'));
    }
}
