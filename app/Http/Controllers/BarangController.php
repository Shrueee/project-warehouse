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
            'qty' => $request->jumlah
        ]);
        return redirect()->back();
    }
    function editJadi(Request $request, Product $product){
        Product::where('id', $request->id)->update([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah
        ]);
        return redirect('/daftar-barang');
    }
    function hapusJadi(Request $request, Product $product){
        Product::where('id', $request->id)->delete();
        return redirect('/daftar-barang');
    }
    function deletedBarang(){
        $deletedBarang = Product::onlyTrashed()->get();
        return view('dashboard.barang.barangDeletedList', ['deletedBarang' => $deletedBarang]);
    }
    function restore($product_id){
        $products = Product::where('id', $product_id)->withTrashed()->first();
        $products->restore();
        return redirect('/daftar-barang');
    }
}
