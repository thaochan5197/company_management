@extends('layouts.admin')
@section("content")
<div class="row">
    <div class="col-12">
        <form action="{{ route('category.add.action') }}" method="post">
            {{ csrf_field() }}
        <div class="form-group mb-15">
            <label for="">{{ __('common.title') }}</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group mb-15">
            <label for="">{{ __('common.status') }}</label>
            <select class="form-control" name="status">
                @foreach(STATUS_CATEGORY as $key => $value)
                <option value="{{ $value }}">{{ __('common.'.$key) }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group mb-15">
            <label for="">{{ __('common.category') }}</label>
            <select class="form-control" name="category">
                <option value="{{ $value }}">{{ __('common.'.$key) }}</option>
            </select>
        </div>
        <div class="form-group mb-15">
            <label for="">{{ __('common.type') }}</label>
            <select class="form-control" name="type">
                @foreach(TYPE_CATEGORY as $key => $value)
                    <option value="{{ $value }}">{{ __('common.'.$key) }}</option>
                @endforeach
            </select>
        </div>
            <input type="submit" name="submit" value="{{ __('common.save') }}" class="btn button-twitter">
        </form>
    </div>
</div>
@endsection()