@extends(ADMIN_LAYOUTS)
@section('content')
@if(isset($position))
        {{ Form::model($position, ['route' => ['position.update', $position->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'position.store']) }}
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
                            <th>Tên chức vụ</th>
                            <th>Chức vụ quản lý trực tiếp</th>
                            @if(!isset($position))
                            <th>+/-</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody id="options_field">
                        <tr>

                            <th>1</th>
                            @if(!isset($position))
                            <td>{{ Form::text('name[]', Input::old('name'), ['required' => 'true', 'class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nhập tên chức vụ']) }}</td>
                            <td>{{ Form::select('manager_id[]', $positions, null, ['required' => 'true', 'class' => 'form-control', 'id' => 'manager_id', 'placeholder' => 'Chọn chức vụ quản lý trực tiếp']) }}</td>

                            <td><input type="button" onclick="add_position(this)" data-url="{{ route('add') }}" id="add_options" name="add_option" value="+" class="btn btn-success"></button>
                                    </td>
                            @else
                            <td>{{ Form::text('name', Input::old('name'), ['required' => 'true', 'class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nhập tên chức vụ']) }}</td>
                            <td>{{ Form::select('manager_id', $positions, Input::old('manager_id'), ['required' => 'true', 'class' => 'form-control', 'id' => 'manager_id', 'placeholder' => 'Chọn chức vụ quản lý trực tiếp']) }}</td>
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

