<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function collection()
    {
        return view('collection');
    }

    public function product()
    {
        return view('product-main');
    }
}
