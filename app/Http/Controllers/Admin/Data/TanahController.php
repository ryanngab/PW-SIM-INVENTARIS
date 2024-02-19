<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    //
    public function index() {

        $tanahs = Tanah::all();
        $title = 'Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.index',compact('title','tanahs'));
    }

    public function create() {
        $title = 'Tambah Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.add',compact('title'));
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'panjang' => 'required',
            'luas' => 'required',
            'lebar' => 'required'
        ]);

        Tanah::create($request->all());

        return redirect()->route('tanah.index')
        ->with('berhasil', 'Data Berhasil di tambahkan');

    }

    public function edit() {
        $title = 'Edit Data Tanah';
        return view('Dashboard.Admin.Data.Tanah.edit',compact('title'));
    }
}
