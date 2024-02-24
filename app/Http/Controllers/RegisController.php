<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    function index()
    {
        return view('registrasi');
    }

    function store(Request $request)
    {
        // pengecekan apakah email sudah terdaftar
        $cekUser = User::where('email', $request->email)->first();
        if ($cekUser) {
            return back()->with(["error" => "Email yang anda masukan telah terdaftar"]);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('login'));
    }
}
