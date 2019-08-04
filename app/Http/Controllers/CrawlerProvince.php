<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrawlerProvince extends Controller
{
    public function __construct()
    {
    
    }
    
    public function getProvince()
    {
        $title = 'Get Province';
        return view('province', compact('title'));
    }
}
