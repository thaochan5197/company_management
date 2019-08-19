@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-20">        
        <div class="box">
            <div class="box-head">
                {{ Form::open(array('route' => 'post.index', 'method' => 'get')) }}
                <div class="row">

                    <div class="col-lg-3 col-12 mb-10">
                        <p class="mb-5">{{ __('common.title') }}</p>
                        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
                    </div>
                    <div class="col-lg-3 col-12 mb-10">
                        <p class="mb-5">{{ __('common.category') }}</p>
                        {{ Form::select('category', $category, Input::old('category'), array('class' => 'form-control')) }}
                    </div>
                    <div class="col-lg-3 col-12 mb-10">
                        <p class="mb-5">{{ __('post.created_date') }}</p>
                        {{ Form::text('created_at', Input::old('created_at'), array('class' => 'form-control input-date-single')) }}
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
                            <th>{{ __('common.id') }}</th>
                            <th>{{ __('common.title') }}</th>
                            <th>{{ __('common.category') }}</th>
                            <th>{{ __('common.status') }}</th>
                            <th>{{ __('post.created_date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td> 
                            <td>
                                <a href="#">{{ $post->title }}</a>
                                <div style="clear: both;text-align: right;padding-top: 10px">
                                    <a href="{{ route('post.show', $post->id) }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{ __('common.view') }}</a>|
                                    <a href="{{ route('post.edit', $post->id) }}"><i class="fa fa-edit" aria-hidden="true"></i> {{ __('common.edit') }}</a>|
                                    <a href="{{ route('post.dropOrPublish', [$post->id, $post->status]) }}"><i class="fa fa-times-circle-o" aria-hidden="true"></i> @if($post->status == '0') {{ __('common.publish') }} @else {{ __('common.drop') }} @endif </a>|
                                    <a href="#" data-toggle="modal" data-target="#deleteModalId_{{ $post->id }}" ><i class="fa fa-trash-o" aria-hidden="true"></i> {{ __('common.delete') }}</a>
                                </div>
                            </td>
                            <td>
                                {{ $post->category->title }}
                            </td>
                            <td>
                                @foreach(STATUS_BY_ID as $key => $value)
                                    @if ($post->status == $key)
                                        {{ $value }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                {{ date($post->created_at) }}
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModalId_{{ $post->id }}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.post') }}</h5>
                                        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align: left;">{{ __('common.comfirm') . ' ' . __('common.delete') . ' ' . __('common.post') }}: {{ $post->title }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="button button-danger" data-dismiss="modal">{{ __('common.close') }}</button>
                                        <a href="{{ route('post.destroy', $post->id) }}" class="button button-primary">{{ __('common.delete') }}</a>
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