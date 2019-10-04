<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    protected $provinceTable;
    public function __construct()
    {
        $this->provinceTable = new Province();
    }
    
    public function getProvince(Request $request, $code = '')
    {
        $code = ($request->exists('code') && $request->route()->named('province.get'))?$request->get('code') : (string)$code;
        $select = ['code', 'name'];
        $where = [
            ['parent_id', '=', $code],
            ['status', '=', PROVINCE_STATUS['public']]
        ];
        
        $info = $this->provinceTable->getResult($select, $where);
        if (!empty($info)) {
            return response()->json([
                'result' => 1,
                'detail' => $info
            ]);
        } else {
            return response()->json([
                'result' => 0,
                'error' => 'This code not exist!'
            ]);
        }
    }
}

