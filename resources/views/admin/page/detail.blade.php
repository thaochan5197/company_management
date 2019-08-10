@extends(ADMIN_LAYOUTS)
@section('content')
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-30">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-30 top-report pt-0">
        <div class="page-heading head">
            <h5 class="title" style="color: black"> {{ $page->title }}</h5>
            <div class="actions view">
                <a href="{{ route('page.edit', $page->id) }}" ><i class="zmdi zmdi-edit"> {{ __('common.edit') }}</i></a>
                <a href="{{ route('page.destroy', $page->id) }}" ><i class="zmdi zmdi-delete"> {{ __('common.delete') }}</i></a>
            </div>
                      
        </div>
        <div class="page-content">
            {!! $page->content !!}
        </div>
    </div><!-- Page Heading End -->

</div>
<!-- Page Headings End -->
@endsection
