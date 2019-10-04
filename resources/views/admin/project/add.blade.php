@extends(ADMIN_LAYOUTS)
@section("content")
    @if($editMode)
    <form action="{{ route('project.edit.action') . "?id=" . $info['id'] }}" method="post">
    @else
    <form action="{{ route('project.add.action') }}" method="post">
    @endif
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-4 col-12 mb-20">
            <p class="mb-15">{{ __('common.name') . ' ' . __('common.project') }}(<span style="color: red">*</span>)</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <div class="form-group">
                        @if($editMode)
                        {{ Form::text('name', $info['name'], ['class' => 'form-control']) }}
                        @else
                        {!! Form::text('name', "" ,['class' => 'form-control']) !!}
                        @endif
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
                            <option value="{{ $item->code }}" @if($editMode && isset($info['province']) && $info['province'] == $item->code){{ "selected='selected'" }}@endif>{{ $item->name }}</option>
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
                        @if ($editMode && !empty($listDistrict))
                            @foreach($listDistrict as $item)
                                <option value="{{ $item->code }}" @if(!empty($info['district']) && $info['district'] == $item->code){{ "selected=selected" }}@endif>{{ $item->name }}</option>
                            @endforeach
                        @endif
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
                        <option value="">{{ __('province.wards') }}</option>
                        @if ($editMode && !empty($listWards))
                            @foreach($listWards as $item)
                                <option value="{{ $item->code }}" @if(!empty($info['wards']) && $info['wards'] == $item->code){{ "selected=selected" }}@endif>{{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('province.street') }}</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    @if($editMode)
                        {{ Form::text('street', $info['street'], ['class' => 'form-control']) }}
                    @else
                        {!! Form::text('street', "" ,['class' => 'form-control']) !!}
                    @endif
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-12 mb-20">

            <p class="mb-15">{{ __('common.status') }}</p>

            <div class="row mbn-15">
                <div class="col-12 mb-15">
                    <select class="form-control" name="status">
                        @foreach(STATUS as $key => $item)
                            <option value="{{ $item }}" @if(!empty($info['status']) && $info['status'] == $item){{ "selected=selected" }}@endif>{{ __('common.' . $key) }}</option>
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