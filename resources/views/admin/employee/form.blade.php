@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Form controls Start-->
    @if(isset($employee))
        {{ Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'employee.store']) }}
    @endif
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Form Field-->

                    <div class="col-lg-12 col-12 mb-20">

                        <h6 class="mb-15">Họ và tên (<span style="color: red">*</span>)</h6>

                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::text('name', Input::old('name'), ['class' => 'form-control', 'id' => 'name', 'required' => 'true']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">

                        <h6 class="mb-15">Chức vụ (<span style="color: red">*</span>)</h6>

                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::select('position_id', $positions, Input::old('position_id'), ['class' => 'form-control', 'id' => 'position_id', 'onchange' => "getPosition(this)", 'data-url' => route('employee.position'), 'placeholder' => 'Chọn chức vụ']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">Email (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::text('mail', Input::old('mail'), ['class' => 'form-control', 'id' => 'mail', 'required' => 'true']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">Số điện thoại (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::number('phone', Input::old('phone'), ['class' => 'form-control', 'id' => 'phone', 'required' => 'true']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">Chi nhánh (<span style="color: red">* Chọn chức vụ trước khi chọn chi nhánh</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::select('agency_id', $agencies, Input::old('agency_id'), ['class' => 'form-control', 'id' => 'agency_id', 'onchange' => "getAgency(this)", 'data-url' => route('employee.agency'), 'placeholder' => 'Chọn chi nhánh']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">Quản lý trực tiếp (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::select('manager_id', $managers, Input::old('manager_id'), ['class' => 'form-control', 'id' => 'manager_id', 'placeholder' => 'Chọn quản lý']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Form controls End-->
    <div class="col-12 mb-30">
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center col mbn-10">
                {{ Form::submit('Submit', ['class' => 'button button-outline button-primary mb-10 ml-10 mr-0']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection()