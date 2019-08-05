@extends(ADMIN_LAYOUTS)
@section("content")
    <div class="row">
        <div class="col-lg-4 col-12 mb-20">
            <p class="mb-15">{{ __('common.name') . ' ' . __('common.project') }}(<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <div class="form-group">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.province') }} (<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="province" data-uri="{{ route('province.get') }}" data-for="district" onchange="getProvince(this)">
                        <option>{{ __('province.province') }}</option>
                        @foreach($listProvince as $item)
                            <option value="{{ $item->code }}">{{ $item->name }}</option>
                            @endforeach
                    </select>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.district') }} (<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="district" data-uri="{{ route('province.get') }}" data-for="wards" onchange="getProvince(this)">
                        <option>{{ __('province.district') }}</option>

                    </select>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.wards') }}</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="wards">
                        <option>{{ __('province.wards') }}</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.street') }}</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <input type="text" class="form-control">
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