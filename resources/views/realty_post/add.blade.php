@extends('layouts.admin')

@section('content')
    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Thông tin cơ bản</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Form Field-->
                        <div class="col-lg-12 col-12 mb-20">

                            <h6 class="mb-15">Tiêu đề (<span style="color: red">*</span>)</h6>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>
                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Hình thức (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Hình thức</option>
                                        <option>Nhà đất bán</option>
                                        <option>Nhà đất cho thuê</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Loại (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Phân mục</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Tỉnh/Thành phố (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Tỉnh/Thành phố</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Quận/Huyện (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Quận/Huyện</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Phường/Xã</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Phường/Xã</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Đường/Phố</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Đường/phố</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Dự án</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Dự án</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Diện tích (m2)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Giá</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Đơn vị</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Tổng tiền</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Địa chỉ (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!--Form controls End-->

        <!--Form Size Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Thông tin mô tả</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <div class="col-12 mb-15"><p> (<span style="color: red">*</span>) Tối đa chỉ 3000 ký tự.</p></div>
                        <div class="col-8 mb-15"><textarea class="form-control" ></textarea></div>

                        <div class="col-4 mb-15">
                            <p>
                                Giới thiệu chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi: Gần công viên, gần trường học ... Tổng diện tích 52m2, đường đi ô tô vào tận cửa.
                            </p>
                            <p style="color: red">Lưu ý: tin rao chỉ để mệnh giá tiền Việt Nam Đồng.</p>
                        </div>

                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>
        <!--Form Size End-->

        <!--Form State Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Thông tin khác</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <div class="col-12 mb-15"><p>Quý vị nên điền đầy đủ thông tin vào các mục dưới đây để tin đăng có hiệu quả hơn</p></div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Mặt tiền (m)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Đường vào (m)</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Hướng nhà</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>KXĐ</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Hướng ban công</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>KXĐ</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Số tầng</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Số phòng ngủ</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Số toilet</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Nội thất</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <textarea class="form-control" ></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>
        <!--Form State End-->

        <!--Form Focus State Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Hình ảnh và Video</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">
                        <div class="col-12 mb-15">
                            <p>Tối đa 8 ảnh với tin thường và 16 với tin VIP. Mỗi ảnh tối đa 2MB</p>
                            <p>Tin rao có ảnh sẽ được xem nhiều hơn gấp 10 lần và được nhiều người gọi gấp 5 lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!</p>
                        </div>
                        <div class="col-12 mb-15">

                            <input class="file-pond" type="file" multiple>
                        </div>
                        <div class="col-12 mb-15">
                            <p>
                                Đăng ảnh thật nhanh bằng cách kéo và thả ảnh vào khung.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>
        <!--Form Focus State End-->

        <!--Form Help text Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Bản đồ</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">

                        <div class="col-12 mb-20">
                            <div id="map" style="width:1000px;height:500px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                                        1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
                                        2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                                        1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
                                        5e0!3m2!1svi!2sus!4v1501056274257" width="600" height="450"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>
        <!--Form Help text End-->

        <!--Other Default Elements Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Liên hệ</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Tên liên hệ</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Địa chỉ</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Điện thoại</p>

                            <div class="row mbn-15">
                                <div class="col-4 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Di động (<span style="color: red">*</span>)</p>

                            <div class="row mbn-15">
                                <div class="col-4 mb-15">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12 mb-20">

                            <p class="mb-15">Email</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control"></div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>
        <!--Other Default Elements End-->

        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Lịch đăng tin</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-lg-4 col-12 mb-20">

                            <p class="mb-15">Loại tin rao</p>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Tin thường</option>
                                        <option>Tin ưu đãi</option>
                                        <option>Tin Vip</option>
                                        <option>Tin đặc biệt</option>
                                    </select>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Ngày bắt đầu</p>
                            <input type="text" class="form-control input-date-single">
                        </div>

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Ngày kết thúc</p>
                            <input type="text" class="form-control input-date-single">
                        </div>

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Đơn giá:</p>
                            <p></p>
                        </div>

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Số ngày:</p>
                            <p></p>
                        </div>

                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>

        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Thành tiền</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Phí đăng tin:</p>
                            <p></p>
                        </div>

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">VAT(10%):</p>
                            <p></p>
                        </div>

                        <div class="col-lg-4 col-12 mb-20">
                            <p class="mb-15">Thành tiền:</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="box-foot">

                </div>
            </div>
        </div>

        <div class="col-12 mb-30">
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center col mbn-10">
                    <button class="button button-outline button-primary mb-10 ml-10 mr-0">Đăng tin</button>
                    <button class="button button-outline button-info mb-10 ml-10 mr-0">Xem trước</button>

                </div>
            </div>
        </div>

    </div>
@endsection()