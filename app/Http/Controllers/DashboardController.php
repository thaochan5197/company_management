<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = __('header.dashboard.index');
        return view('dashboard.index', compact('title'));
    }
}
