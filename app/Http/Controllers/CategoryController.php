<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $category;
    public function __construct()
    {
        $this->category = new Category;
    }

    public function showForm(Request $request)
    {
        $title = __('common.add') . ' ' . __('common.category');
        // get list category
        $editMode = false;
        $infoCat = [];
        $whereCat = [
            'status' => STATUS_CATEGORY['public']
        ];
        $listCat = $this->category->getResult($whereCat);

        if ($request->route()->named('category.edit.show')) {
            $editMode = true;
            $idRecord = $request->get('id');
            $select = ['id'];
            $where = ['id' => $idRecord];
            $info = $this->category->getInfo($select, $where);
            if ($info->exists()) {
                $infoCat = $info->getAttributes();
            }
        }

        //
        return view(CATEGORY_VIEW_ADD, compact('title', 'listCat', 'editMode', 'infoCat', 'editMode'));
    }
    
    public function add(CategoryRequest $request)
    {
        $validate = $request->validate();
        if (is_null($validate)) {

            $this->category->title = $request->input('title');
            $this->category->status = $request->input('status');
            $this->category->parent_id = $request->input('category');
            $this->category->type = $request->input('type');
            $this->category->save();
            return redirect()->route('category.add.show');
        }
    }

    public function edit(CategoryRequest $request)
    {
        $validate = $request->validate();

    }
}
