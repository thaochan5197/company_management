@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-20">
        <div class="box">

            <div class="box-body">
                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agencies as $agency)
                        <tr>
                            <td>{{ $agency->id }}</td>

                            <td>
                                <a href="#">{{ $agency->name }}</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">

                                    <a href="{{ route('agency.edit', $agency->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> sửa</a>|

                                    <a href="#" data-toggle="modal" data-target="#deleteModalId_{{ $agency->id }}" ><i class="fa fa-trash-o" aria-hidden="true"></i> xóa</a>
                                </div>
                            </td>
                            <td>{{ $agency->mail }}</td>
                            <td>{{ $agency->phone }}</td>
                            <td>{{ $agency->address }}</td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModalId_{{ $agency->id }}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.agency') }}</h5>
                                        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align: left;">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.agency') }}: {{ $agency->title }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="button button-danger" data-dismiss="modal">{{ __('common.close') }}</button>
                                        <a href="{{ route('agency.destroy', $agency->id) }}" class="button button-primary">{{ __('common.delete') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>
@endsection()