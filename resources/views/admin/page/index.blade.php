@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-20">        
        <div class="box">
            <div class="box-head">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-10">
                        <p class="mb-5">{{ __('common.title') }}</p>
                        <input type="text" name="fd" class="form-control">
                    </div>
                    <div class="col-lg-3 col-12 mb-10">
                        <button class="button button-primary mb-15 ml-10 mr-0" style="margin-top: 35px;">{{ __('common.search') }}</button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                            <th>{{ __('common.serial') }}</th>
                            <th>{{ __('common.id') }}</th>
                            <th>{{ __('common.title') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->order }}</td>
                            <td>{{ $page->id }}</td> 
                            <td>
                                <a href="#">{{ $page->title }}</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">
                                    <a href="{{ route('page.show', $page->id) }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ __('common.view') }}</a>|
                                    <a href="{{ route('page.edit', $page->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> {{ __('common.edit') }}</a>|
                                    <a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Hạ</a>|
                                    <a href="{{ route('page.destroy', $page->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('common.delete') }}</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>
@endsection()