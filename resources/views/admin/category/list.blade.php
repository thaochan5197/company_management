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
                <th>{{ __('common.title') }}</th>
                <th>{{ __('common.type') }}</th>
                <th></th>
                <th>{{ __('common.created_at') }}</th>
                <th>{{ __('common.updated_at') }}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {{ getSubCategory($listCat, 'table') }}
            </tbody>

        </table>
    </div>
</div>
@endsection()