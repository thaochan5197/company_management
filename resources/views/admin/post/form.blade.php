@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Form controls Start-->
    @if(isset($post))
        {{ Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'put']) }}
    @else
        {{ Form::open(['route' => 'post.store']) }}
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
                                {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'return ChangeToSlug()']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('common.slug') }} (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::text('slug', Input::old('slug'), ['class' => 'form-control', 'id' => 'slug']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('post.summary') }}</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::textarea('summary', Input::old('summary'), ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12 mb-20">
                        <h6 class="mb-15">{{ __('common.category') }} (<span style="color: red">*</span>)</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::select('category', $category, Input::old('slug'), ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 mb-20">
                        <h6 class="mb-15">{{ __('common.status') }}</h6>
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                {{ Form::select('status', STATUS_CATEGORY_BY_INT, Input::old('status'), ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-20">
                        <h6 class="mb-15">{{ __('post.content') }}</h6>
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