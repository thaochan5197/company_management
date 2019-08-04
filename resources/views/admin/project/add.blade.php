@extends(ADMIN_LAYOUTS)
@section("content")
    <div class="row">
        <div class="col-lg-4 col-12 mb-20">
            <p class="mb-15">Tên dự án(<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <div class="form-group">
                        <input type="text" name="" id="" class="form-control">
                    </div>
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
    </div>
@endsection()