<?php

namespace App\Http\Controllers\Admin\Data;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Tanah;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    //
    public function index() {

        $gedungs = Gedung::all();
        $title = 'Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.index',compact('title','gedungs'));
    }

    public function create() {
        $tanahs = Tanah::all();

        $title = 'Tambah Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.add',compact('title','tanahs'));
    }

    public function store(Request $request) {
        
        $validateDate = $request->validate([
            'nama_gedung' => 'required|max:255',
            'tanah_id' => 'required',
        ]);

        Gedung::create($validateDate);

        return redirect()->route('gedung.index')->with('berhasil','good job!');

    }

    public function edit() {
        $title = 'Edit Data Gedung';
        return view('Dashboard.Admin.Data.Gedung.edit',compact('title'));
    }

}

