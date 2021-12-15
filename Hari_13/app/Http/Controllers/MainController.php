<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('halaman.dashboard');
    }
    public function datatable(){
        return view('halaman.datatable');
    }
    public function table(){
        return view('halaman.table');
    }
}
