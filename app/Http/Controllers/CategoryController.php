<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showForm()
    {
        $title = __('common.add') . ' ' . __('common.category');
        return view(CATEGORY_VIEW_ADD, compact('title'));
    }
    
    public function add(CategoryRequest $request)
    {
        $validate = $request->validate();
        if (is_null($validate)) {
            $category = new Category;
            $category->title = $request->input('title');
            $category->status = $request->input('status');
            $category->parent_id = $request->input('category');
            $category->type = $request->input('type');
            $category->save();
            return redirect()->route('category.add.show');
        }
    }
}
