<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealtyPostController extends Controller
{
    public function add()
    {
        $title = __('common.add') . ' ' . __('common.realty_post');
        return view(REALTY_POST_VIEW_ADD, compact('title'));
    }
}
