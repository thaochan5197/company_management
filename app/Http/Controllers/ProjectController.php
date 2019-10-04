<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use App\Province;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $provinceTable;

    protected $projectTable;

    protected $provinceController;

    public function __construct()
    {
        $this->provinceTable = new Province();
        $this->projectTable = new Project();
        $this->provinceController = new ProvinceController();
    }
    
    public function showForm(Request $request)
    {
        $title = __('common.add') . ' ' . __('common.project');
        $editMode = false;
        $info = [];
        $listProvince = $this->provinceController->getProvince($request, 0)->getData();
        $listProvince = $listProvince->detail;
        if ($request->route()->named('project.edit.show')) {
            $idRecord = $request->get('id');
            if ($idRecord !== null) {
                $select = ['*'];
                $where = [
                    ['id', '=', $idRecord]
                ];
                $info = $this->projectTable->getInfo($select, $where);
                if ($info->exists()) {
                    $editMode = true;
                    // get list quan huyen theo tinh
                    $listDistrict = $this->provinceController->getProvince($request, $info['province'])->getData();
                    if ($listDistrict->result) {
                        $listDistrict = $listDistrict->detail;
                    } else {
                        $listDistrict = '';
                    }
                    // get list xa/phuong theo quan huyen
                    $listWards = $this->provinceController->getProvince($request, $info['district'])->getData();
                    if ($listWards->result) {
                        $listWards = $listWards->detail;
                    } else {
                        $listWards = '';
                    }
                } else {
                    return response()->json([
                        'result' => 0,
                        'error' => 'Not exists this record!'
                    ]);
                }
            } else {
                return response()->json([
                    'result' => 0,
                    'error' => 'Not exists this record!'
                ]);
            }
        }
        return view(PROJECT_VIEW_ADD, compact('title', 'listCat', 'listProvince', 'editMode', 'info', 'listDistrict', 'listWards'));
    }

    public function add(ProjectRequest $request)
    {
        if ($request->isMethod('post') && ($request->route()->named('project.add.action') || $request->route()->named('project.edit.action'))) {
            $validate = $request->validate();
            if ($validate === null) {
                $data = $request->input();
                unset($data['_token']);
                foreach ($data as $key => $item) {
                    $this->projectTable->$key = $item;
                }
                if ($request->route()->named('project.add.action')) {
                    $this->projectTable->save();
                } elseif ($request->route()->named('project.edit.action')) {
                    $id = $request->get('id');
                    $dataUpdate = $this->projectTable->getAttributes();
                    $where = ['id' => $id];
                    $result = $this->projectTable->updateInfo($where, $dataUpdate);
                }
                
                return redirect()->route('project.list');
            }
        }
    }

    public function showList()
    {
        $title = __('common.list') . ' ' . __('common.project');
        $list = $this->projectTable->getResult();
        $selectProvince = ['name'];

        foreach ($list as $key => $item) {
            if (!empty($item['province'])) {
                $whereProvince = [
                    ['code', '=', $item['province']]
                ];
                $info = $this->provinceTable->getInfo($selectProvince, $whereProvince);
                $list[$key]['province'] = $info['name'];
            }

            if (!empty($item['district'])) {
                $whereDistrict = [
                    ['code', '=', $item['district']]
                ];
                $info = $this->provinceTable->getInfo($selectProvince, $whereDistrict);
                $list[$key]['district'] = $info['name'];
            }
            if (!empty($item['wards'])) {
                $whereWards = [
                    ['code', '=', $item['wards']]
                ];
                $info = $this->provinceTable->getInfo($selectProvince, $whereWards);
                $list[$key]['wards'] = $info['name'];
            }
        }

        return view(PROJECT_VIEW_LIST, compact('title', 'list'));
    }
    
}
