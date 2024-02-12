<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    //
    public function index() {

        $title = 'Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.index',compact('title'));
    }

    public function create() {
        $title = 'Tambah Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.add',compact('title'));
    }

    public function edit() {
        $title = 'Edit Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.edit',compact('title'));
    }
}
