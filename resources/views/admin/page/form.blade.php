@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Form controls Start-->
    @if(isset($agency))
        {{ Form::model($agency, ['route' => ['agency.update', $agency->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'agency.store']) }}
    @endif
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Form Field-->

                    <div class="col-lg-12 col-12 mb-20">

                        <h6 class="mb-15">Tên chi nhánh (<span style="color: red">*</span>)</h6>

                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::text('name', Input::old('name'), ['class' => 'form-control', 'id' => 'name', 'required' => 'true']) }}
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
                        <h6 class="mb-15">Địa chỉ (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::text('address', Input::old('address'), ['class' => 'form-control', 'id' => 'address', 'required' => 'true']) }}
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