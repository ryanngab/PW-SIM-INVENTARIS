<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    //
    public function index() {

        $title = 'Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.index',compact('title'));
    }

    public function create() {
        $title = 'Tambah Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.add',compact('title'));
    }

    public function edit() {
        $title = 'Edit Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.edit',compact('title'));
    }

}

