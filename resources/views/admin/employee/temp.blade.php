@extends(ADMIN_LAYOUTS)
@section('content')
@if(isset($employee))
        {{ Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'employee.store']) }}
    @endif
<div class="row">
    <!--Default Data Table Start-->

    <div class="col-12 mb-20">
        <div class="box">
            
            <div class="box-body">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th>#</th>
                            <th>Họ và tên</th>
                            <th>Chức vụ</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Chi nhánh</th>
                            <th>QLTT</th>
                            @if(!isset($employee))
                            <th>+/-</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody id="options_field">
                        <tr>
                            <th>1</th>
                            @if(!isset($employee))
                            <td>{{ Form::text('name[]', Input::old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => '']) }}</td>
                            <td>{{ Form::select('position_id[]', $positions, Input::old('position_id'), ['class' => 'form-control', 'id' => 'position_id', 'onchange' => "getPosition(this)", 'data-url' => route('employee.position')]) }}</td>
                            <td>{{ Form::text('mail[]', Input::old('mail'), ['class' => 'form-control', 'id' => 'mail', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('phone[]', Input::old('phone'), ['class' => 'form-control', 'id' => 'phone', 'placeholder' => '']) }}</td>
                            <td>{{ Form::select('agency_id[]', $agencies, Input::old('agency_id'), ['class' => 'form-control', 'id' => 'agency_id', 'onchange' => "getAgency(this)", 'data-url' => route('employee.agency')]) }}</td>
                            <td>{{ Form::text('manager_id[]', Input::old('manager_id'), ['class' => 'form-control', 'id' => 'manager_id']) }}</td>


                            <td><input type="button" onclick="add_employee(this)" id="add_employee" value="+" class="btn btn-success"></button>
                                    </td>
                            @else
                            <td>{{ Form::text('name', Input::old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('position_id', Input::old('position_id'), ['class' => 'form-control', 'id' => 'position_id', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'id' => 'email', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('phone', Input::old('phone'), ['class' => 'form-control', 'id' => 'phone', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('agency_id', Input::old('agency_id'), ['class' => 'form-control', 'id' => 'agency_id', 'placeholder' => '']) }}</td>
                            <td>{{ Form::text('manager_id', Input::old('manager_id'), ['class' => 'form-control', 'id' => 'manager_id', 'placeholder' => '']) }}</td>
                            @endif
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 mb-30">
            <div class="row">
                <div class="d-flex flex-wrap justify-content-center col mbn-10">
                    {{ Form::submit('Submit', ['class' => 'button button-outline button-primary mb-10 ml-10 mr-0']) }}
                </div>
            </div>
        </div>
    </div>

    <!--Default Data Table End-->
</div>
{{ Form::close() }}
@endsection()