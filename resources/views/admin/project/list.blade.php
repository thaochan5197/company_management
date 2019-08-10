<?php
/**
 * @var $listCat App\Http\Controllers\CategoryController
 */
?>
@extends(ADMIN_LAYOUTS)
@section("content")
<div class="row">
    <div class="col-12">
        <table class="table table-bordered data-table data-table-default">
            <thead>
            <tr>
                <th>{{ __('common.id') }}</th>
                <th></th>
                <th>{{ __('common.name') }}</th>
                <th>{{ __('common.address') }}</th>
                <th>{{ __('common.created_at') }}</th>
                <th>{{ __('common.updated_at') }}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($list as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td><i class="{{ STATUS_COLOR[$item['status']] }}"></i></td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['street'] . ' - ' . $item['wards'] . ' - ' . $item['district'] . ' - ' . $item['province'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>{{ $item['updated_at'] }}</td>
                    <td>
                        <a href='{{ route('project.edit.show') . '?id=' . $item['id'] }}' class='btn btn-success btn-sm'><i class='fa fa-pencil-square-o'></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection()