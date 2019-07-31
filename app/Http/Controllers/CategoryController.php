<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add()
    {
        $title = __('common.add') . ' ' . __('common.category');
        return view(CATEGORY_VIEW_ADD, compact('title'));
    }
}
