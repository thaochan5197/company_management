<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class CrawlerProvince extends Controller
{
    protected $provinceTable;
    public function __construct()
    {
        $this->provinceTable = new Province();
    }
    
    public function getProvince(Request $request)
    {
        $title = 'Get Province';
        $fullProvince = $request->get('province');
        $where = [
            ['type', '=', PROVINCE_TYPE['province']]
        ];
        $listProvince = $this->provinceTable->getResult($where);
        $data = [];
        if (!empty($fullProvince)) {
            $exPro = explode("---", $fullProvince);
            $code = $exPro[0];
            $name = $exPro[1];
            $data[] = [
                'code' => $code,
                'name' => $name,
                'status' => 1,
                'parent_id' => 0,
                'type' => PROVINCE_TYPE['province'],
                'zip_code' => null
            ];
            $listDistrict = json_decode($this->getDataCurl($code));
            foreach ($listDistrict->module as $item) {
                $arr = [
                    'code' => $item->id,
                    'name' => $item->displayName,
                    'status' => 1,
                    'parent_id' => $item->parentId,
                    'type' => PROVINCE_TYPE['district'],
                    'zip_code' => null
                ];
                $data[] = $arr;
                $listWard = json_decode($this->getDataCurl($arr['code']));
                if (!empty($listWard->module)) {
                    foreach ($listWard->module as $item) {
                        $arr2 = [
                            'code' => $item->id,
                            'name' => $item->displayName,
                            'status' => 1,
                            'parent_id' => $item->parentId,
                            'type' => PROVINCE_TYPE['wards'],
                            'zip_code' => null
                        ];
                        $data[] = $arr2;
                    }
                }
            }
            foreach ($data as $value) {
                foreach ($value as $key => $item){
                    $this->provinceTable->$key = $item;
                }
                $this->provinceTable->insert($value);
            }

            return redirect()->route('province.get');

        }
        return view('province', compact('title', 'listProvince'));
    }

    private function getDataCurl($code)
    {
        // URL có chứa hai thông tin name và diachi
        $url = 'https://member.lazada.vn/locationtree/api/getSubAddressList?countryCode=VN&addressId='.$code;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
