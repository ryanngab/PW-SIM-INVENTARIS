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
}
