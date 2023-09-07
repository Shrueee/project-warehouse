<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact(['products', 'categories']));
    }
    
    function tambah(Request $request){
        product::create([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect()->back();
    }
    function edit(Product $product){
        $aksi = 'edit';
        $target = $product;
        $products = product::select('*')->get();
        $categories = Category::where('id', '!=', $target->category->id)->get();
        return view('dashboard.barang.daftarBarang', compact(['categories', 'products', 'aksi', 'target']));
    }
    function editJadi(Request $request, Product $product){
        Product::where('id', $product->id)->update([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect('/daftar-barang');
    }
    function hapus(Product $product){
        $aksi = 'hapus';
        $target = $product;
        $products = product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact(['categories', 'products', 'aksi', 'target']));
    }
    function hapusJadi(Request $request, Product $product){
        Product::where('id', $product->id)->delete();
        return redirect('/daftar-barang');
    }
    function deletedBarang(){
        return view('barangDeletedList');
    }
}
