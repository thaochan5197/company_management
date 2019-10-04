@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-20">        
        <div class="box">
            <div class="box-head">
                    {{ Form::open(array('route' => 'employee.index', 'method' => 'get')) }}
                    <div class="row">

                        <div class="col-lg-3 col-12 mb-10">
                            <p class="mb-5">{{ __('common.name') }}</p>
                            {{ Form::text('name', Input::old('title'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-lg-3 col-12 mb-10">
                            <p class="mb-5">{{ __('common.position') }}</p>
                            {{ Form::select('position_id', $positions, Input::old('category'), array('class' => 'form-control', 'placeholder' => 'Chọn chức vụ')) }}
                        </div>
                        <div class="col-lg-3 col-12 mb-10">
                            <p class="mb-5">{{ __('common.phone') }}</p>
                            {{ Form::number('phone', Input::old('phone'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-lg-3 col-12 mb-10">
                            <p class="mb-5">{{ __('common.mail') }}</p>
                            {{ Form::text('mail', Input::old('mail'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-lg-3 col-12 mb-10">
                            <p class="mb-5">{{ __('common.agency') }}</p>
                            {{ Form::select('agency_id', $agencies, Input::old('agency_id'), array('class' => 'form-control', 'placeholder' => 'Chọn chi nhánh')) }}
                        </div>
                        <div class="col-lg-3 col-12 mb-10">
                            {{ Form::submit(__('common.search'), array('class' => 'button button-primary mb-15 ml-10 mr-0', 'style' => 'margin-top: 35px')) }}
                        </div>

                    </div>
                    {{ Form::close() }}
                </div>

            <div class="box-body">
                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Chức vụ</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Chi nhánh</th>
                            <th>DS NV dưới quyền</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>

                            <td>
                                <a href="#">{{ $employee->name }}</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">

                                    <a href="{{ route('employee.edit', $employee->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> sửa</a>|

                                    <a href="#" data-toggle="modal" data-target="#deleteModalId_{{ $employee->id }}" ><i class="fa fa-trash-o" aria-hidden="true"></i> xóa</a>
                                </div>
                            </td>
                            <td>{{ $employee->position->name }}</td>
                            <td>{{ $employee->mail }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->agency->name }}</td>
                            <td> <a href="{{ route('employee.show', $employee->id) }}"> Xem </a> </td>


                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModalId_{{ $employee->id }}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.employee') }}</h5>
                                        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align: left;">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.employee') }}: {{ $employee->name }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="button button-danger" data-dismiss="modal">{{ __('common.close') }}</button>
                                        <a href="{{ route('employee.destroy', $employee->id) }}" class="button button-primary">{{ __('common.delete') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
                {{ $employees->links() }}
            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>
@endsection()