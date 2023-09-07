<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stok = product::count();
        return view('dashboard.main', compact('stok'));
        // $tharga = price::count();
        // return view('dashboard.main', compact('tharga'));
    }
}
