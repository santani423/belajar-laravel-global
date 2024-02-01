<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
       function index()
       {
              $title = "Gloabl ";
              $nama = ['ahmad', 'sinta', 'beni'];
              // return view("welcome", [
              //        'title' => $title,
              //        'names' => $nama
              // ]);

              return View("welcome", compact('title', 'nama'));
       }

       function produk()
       {
              $title = "Produk";
              return view("produk", compact('title'));
       }
}
