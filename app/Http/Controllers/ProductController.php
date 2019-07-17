<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = __('header.product');
        return view('product.index', compact('title'));
    }
}
