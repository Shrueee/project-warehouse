<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    function index(){
        $suppliers = Supplier::get();
        return view('dashboard.akun.supplier', compact('suppliers'));
    }
    function hapus(Supplier $supplier){
        $aksi = 'hapus';
        $hapus = $supplier;
        $suppliers = supplier::get();
        return view('dashboard.akun.supplier', compact(['suppliers', 'aksi', 'hapus']));
    }
    function hapusJadi(Request $request, Supplier $supplier){
        Supplier::where('id', $supplier->id)->delete();
        return redirect('/akun-supplier');
    }
}