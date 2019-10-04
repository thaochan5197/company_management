<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    protected $category;
    
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->category = new Category;
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showList()
    {
        $title = __('common.list') . ' ' . __('common.category');
        $listCat = $this->category->getResult();
        return view(CATEGORY_VIEW_LIST, compact('title', 'listCat'));
    }
    
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showForm(Request $request)
    {
        $title = __('common.add') . ' ' . __('common.category');
        // get list category
        $editMode = false;
        $infoCat = [];
        $whereCat = [
            ['status', '=', STATUS_CATEGORY['public']]
        ];
        
        //edit mode
        if ($request->route()->named('category.edit.show')) {
            $editMode = true;
            $idRecord = $request->get('id');
            $select = ['*'];
            $where = ['id' => $idRecord];
            $info = $this->category->getInfo($select, $where);
            if ($info->exists()) {
                $infoCat = $info->getAttributes();
                $whereCat[] = ['type', "=", $infoCat['type']];
                $whereCat[] = ['id', "<>", $idRecord];
            }
        }
        $listCat = $this->category->getResult($whereCat);
        //
        return view(CATEGORY_VIEW_ADD, compact('title', 'listCat', 'editMode', 'infoCat', 'editMode'));
    }
    
    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(CategoryRequest $request)
    {
        $validate = $request->validate();
        if (is_null($validate)) {
            $inData = $request->input();
            if (isset($inData['_token'])) {
                unset($inData['_token']);
            }
            foreach ($inData as $key => $value) {
                $this->category->$key = $value;
            }
            if ($request->route()->named('category.add.action')) {
                $this->category->save();
            } elseif ($request->route()->named('category.edit.action')) {
                $id = $request->get('id');
                $where = ['field' => 'id', 'data' => $id];
                $data = $this->category->getAttributes();
                $result = $this->category->updateInfo($where, $data);
            }
            
            return redirect()->route('category.list');
        }
    }
    
    public function checkType(Request $request)
    {
        $id = $request->get('id');
        $select = ['id', 'type'];
        $where = [
            ['id', '=', $id]
        ];
        
        $info = $this->category->getInfo($select, $where);
        if ($info->exists()) {
            $response = [
                'result' => 1,
                'info' => $info
            ];
        } else {
            $response = [
                'result' => 0,
                'info' => 'Error!!!'
            ];
        }
        return response()->json($response);
    }

}
