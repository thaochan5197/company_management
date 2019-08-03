<?php
/**
 * @var $listCat App\Http\Controllers\CategoryController
 */
?>
@extends('layouts.admin')
@section("content")
<div class="row">
    <div class="col-12">
        <table class="table table-bordered data-table data-table-default">
            <thead>
            <tr>
                <th>{{ __('common.id') }}</th>
                <th>{{ __('common.title') }}</th>
                <th></th>
                <th>{{ __('common.category') }}</th>
                <th>{{ __('common.created_at') }}</th>
                <th>{{ __('common.updated_at') }}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($listCat as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td><i class="{{ STATUS_COLOR[$item['status']] }}"></i></td>
                <td><i class="{{ $item['parent_id'] }}"></i></td>
                <td>{{ $item['created_at'] }}</td>
                <td>{{ $item['updated_at'] }}</td>
                <td><a href="{{ route('category.edit.action') . '?id=' . $item['id'] }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i></a><a href="" class="btn btn-sm btn-danger ml-5"><i class="fa fa-trash-o"></i></a></td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection()