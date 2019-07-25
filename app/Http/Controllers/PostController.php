<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
        $title = __('common.add') . ' ' . __('common.post');
        return view('post.index', compact('title'));
    }
}
