<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $province;
    public function __construct()
    {
        $this->province = new ProvinceController();
    }
    
    public function showForm(Request $request)
    {
        $title = __('common.add') . ' ' . __('common.project');
    
        $listProvince = $this->province->getProvince($request, 0)->getData();
        $listProvince = $listProvince->detail;
        return view(PROJECT_VIEW_ADD, compact('title', 'listCat', 'listProvince'));
    }
}
