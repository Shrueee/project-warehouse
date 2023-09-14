<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $categories = Category::get();
        $aksi = 'tambah';
        return view('dashboard.barang.kategori', compact('categories', 'aksi'));
    }
    function tambah(Request $request){
        Category::create([
            'name' => $request->nama
        ]);
        return redirect()->back();
    }
    function edit(Category $category){
        $aksi = 'edit';
        $target = $category;
        $categories = Category::get();
        return view('dashboard.barang.kategori', compact(['categories', 'aksi', 'target']));
    }
    function editJadi(Request $request, Category $category){
        Category::where('id', $category->id)->update([
            'name' => $request->nama
        ]);
        return redirect('/kategori-barang');
    }
    function hapus(Category $category){
        $aksi = 'hapus';
        $target = $category;
        $categories = Category::get();
        return view('dashboard.barang.kategori', compact(['categories', 'aksi', 'target']));
    }
    function hapusJadi(Request $request, Category $category){
        Category::where('id', $category->id)->delete();
        return redirect('/kategori-barang');
    }
    function deletedBarang(){
        $deletedBarang = Category::onlyTrashed()->get();
        return view('dashboard.barang.barangDeletedList', ['deletedBarang' => $deletedBarang]);
    }
    function restore($product_id){
        $products = Category::where('id', $product_id)->withTrashed()->first();
        $products->restore();
        return redirect('/daftar-barang');
    }
    function deletedCategory(){
        $deletedCategory = Category::onlyTrashed()->get();
        return view('dashboard.barang.kategoriDeletedList', ['deletedCategory' => $deletedCategory]);
    }
    function restored($category_id){
        $categories = Category::where('id', $category_id)->withTrashed()->first();
        $categories->restore();
        return redirect('/daftar-kategori');
    }
}
