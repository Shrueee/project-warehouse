<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluarController extends Controller
{
    function index(){
        return view('dashboard.barang.barangKeluar');
    }
}
