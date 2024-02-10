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
}
