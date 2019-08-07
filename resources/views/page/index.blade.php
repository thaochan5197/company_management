@extends('layouts.admin')
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-30">        
        <div class="box">
            <div class="box-head">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-10">
                        <p class="mb-5">Tiêu đề</p>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 mb-10">
                        <button class="button button-primary mb-15 ml-10 mr-0" style="margin-top: 35px;">Tìm kiếm</button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>21766920</td> 
                            <td>
                                <a href="#">Cần bán 280m2, đất tại thị trấn Gạch - Phúc Thọ - Hà Nội (sổ đỏ chính chủ)</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">
                                    <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Xem</a>|
                                    <a href="#"><i class="fa fa-edit" aria-hidden="true"></i> Sửa</a>|
                                    <a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Hạ</a>|
                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
                                </div>
                            </td>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>