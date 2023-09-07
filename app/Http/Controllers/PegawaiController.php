<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index(){
        $users = User::get();
        return view('dashboard.akun.pegawai', compact('users'));
    }
    function hapus(User $user){
        $aksi = 'hapus';
        $hapus = $user;
        $users = user::get();
        return view('dashboard.akun.pegawai', compact(['users', 'aksi', 'hapus']));
    }
    function hapusJadi(Request $request, User $user){
        User::where('id', $user->id)->delete();
        return redirect('/akun-pegawai');
    }
}