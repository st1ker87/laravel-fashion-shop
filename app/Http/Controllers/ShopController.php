<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class ShopController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        $dresses = Dress::all();
        $data = [
            'dresses' => $dresses
        ];
        return view('products', $data);
    }
}
