<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showForm()
    {
        $title = __('common.add') . ' ' . __('common.project');
        return view(PROJECT_VIEW_ADD, compact('title', 'listCat'));
    }
}
