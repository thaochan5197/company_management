@extends(ADMIN_LAYOUTS)
@section('content')
<div class="row">
    <!--Default Data Table Start-->
    <div class="col-12 mb-20">
        <div class="box">

            <div class="box-body">
                <table class="table table-bordered data-table data-table-default">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>{{ $manager->id }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Họ và tên</td>
                            <td>{{ $manager->name }}</td>
                        </tr>
                        <tr>
                            <td>Chức vụ</td>
                            <td>{{ $manager->position->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $manager->mail }}</td>
                        </tr>
                        <tr>
                            <td>SĐT</td>
                            <td>{{ $manager->phone }}</td>
                        </tr>
                        <tr>
                            <td>Chi nhánh</td>
                            <td>{{ $manager->agency->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Default Data Table End-->
</div>
<div class="row">
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">Danh sách nhân viên dưới quyền</span></h3>
        </div>
    </div>
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">

            <div class="box-body">
              <ul class="list-group">
              @foreach ($employees as $employee)
                  <li class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{ $employee->name }}</h5>
                      </div>
                      @if(count($employee->employees))
                      @include('admin.employee.list_employee', $employees = $employee->employees);
                      @endif
                  </li>
                  @endforeach
              </ul>
            </div>
        </div>
    </div>
</div>
@endsection()