<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        $title = 'Data Chart';
        $users = User::all();

        return view('Dashboard.index',compact('users','title'));
    }
}
