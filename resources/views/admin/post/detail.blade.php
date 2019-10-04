@extends(ADMIN_LAYOUTS)
@section('content')
<!-- post Headings Start -->
<div class="row justify-content-between align-items-center mb-30">

    <!-- post Heading Start -->
    <div class="col-12 col-lg-auto mb-30 top-report pt-0">
        <div class="post-heading head">
            <h5 class="title" style="color: black; text-align:center;"> {{ $post->title }}</h5>
            <div class="actions view">
                <a href="{{ route('post.edit', $post->id) }}" ><i class="zmdi zmdi-edit"> {{ __('common.edit') }}</i></a>
                <a href="{{ route('post.destroy', $post->id) }}" ><i class="zmdi zmdi-delete"> {{ __('common.delete') }}</i></a>
            </div>
                      
        </div>
        <div class="post-content">
            {!! $post->content !!}
        </div>
    </div><!-- post Heading End -->

</div>
<!-- post Headings End -->
@endsection
