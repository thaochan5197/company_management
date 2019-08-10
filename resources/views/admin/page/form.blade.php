@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Form controls Start-->
    @if(isset($page))
        {{ Form::model($page, ['route' => ['page.update', $page->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'page.store']) }}
    @endif
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <div class="row mbn-20">
                    <!--Form Field-->
                    
                    <div class="col-lg-12 col-12 mb-20">

                        <h6 class="mb-15">{{ __('common.title') }} (<span style="color: red">*</span>)</h6>

                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <!-- <input type="text" name="title" value="{{ Input::old('title') }}" class="form-control" id="title" onkeyup="ChangeToSlug()"> -->
                                {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'ChangeToSlug']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('page.slug') }} (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <!-- <input type="text" name="slug" value="{{ Input::old('slug') }}" class="form-control" id="slug"> -->
                                {{ Form::text('slug', Input::old('slug'), ['class' => 'form-control', 'id' => 'slug']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('page.order') }}</h6>
                        <div class="row mbn-15">
                            <div class="col-3 mb-15">
                                {{ Form::number('order', Input::old('order'), ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('page.content') }}</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-30">
                                {{ Form::textarea('content', Input::old('content'), ['class' => 'summernote']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Form controls End-->
    <div class="col-12 mb-30">
        <div class="row">
            <div class="d-flex flex-wrap justify-content-center col mbn-10">
                {{ Form::submit(__('common.submit'), ['class' => 'button button-outline button-primary mb-10 ml-10 mr-0']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection()