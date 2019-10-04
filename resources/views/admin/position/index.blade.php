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
                            <th>Chức vụ quản lý trực tiếp</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($positions as $position)
                        <tr>
                            <td>{{ $position->id }}</td>

                            <td>
                                <a href="#">{{ $position->name }}</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">

                                    <a href="{{ route('position.edit', $position->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> sửa</a>|

                                    <a href="#" data-toggle="modal" data-target="#deleteModalId_{{ $position->id }}" ><i class="fa fa-trash-o" aria-hidden="true"></i> xóa</a>
                                </div>
                            </td>

                            @if(isset($position->manager))

                            <td>{{ $position->manager->name }}</td>
                            @else
                            <td>Cấp cao nhất</td>
                            @endif
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModalId_{{ $position->id }}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.position') }}</h5>
                                        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align: left;">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.position') }}: {{ $position->name }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="button button-danger" data-dismiss="modal">{{ __('common.close') }}</button>
                                        <a href="{{ route('position.destroy', $position->id) }}" class="button button-primary">{{ __('common.delete') }}</a>
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