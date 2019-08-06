@extends(ADMIN_LAYOUTS)
@section("content")
    <form action="{{ route('project.add.action') }}" method="post">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-4 col-12 mb-20">
            <p class="mb-15">{{ __('common.name') . ' ' . __('common.project') }}(<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <div class="form-group">
                        <input type="text" name="name" id="" class="form-control" value="@if($editMode){{ $info['name'] }}@endif">
                    </div>
                    @if($errors->has('name'))
                        <span class="text-danger font-italic">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.province') }} (<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="province" data-uri="{{ route('province.get') }}" data-for="district" onchange="getProvince(this)">
                        <option value="">{{ __('province.province') }}</option>
                        @foreach($listProvince as $item)
                            <option value="{{ $item->code }}">{{ $item->name }}</option>
                            @endforeach
                    </select>
                    @if($errors->has('province'))
                        <span class="text-danger font-italic">{{ $errors->first('province') }}</span>
                    @endif
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.district') }} (<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="district" data-uri="{{ route('province.get') }}" data-for="wards" onchange="getProvince(this)">
                        <option value="">{{ __('province.district') }}</option>
                    </select>
                    @if($errors->has('district'))
                        <span class="text-danger font-italic">{{ $errors->first('district') }}</span>
                    @endif
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
                    <input type="text" class="form-control" name="street">
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('common.status') }}</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="status">
                        @foreach(STATUS as $key => $item)
                            <option value="{{ $item }}">{{ __('common.' . $key) }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <span class="text-danger font-italic">{{ $errors->first('status') }}</span>
                    @endif
                </div>
            </div>

        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="{{ __('common.save') }}">
        </div>
    </div>
    </form>
@endsection()