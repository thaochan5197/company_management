<ul class="list-group">
    @foreach ($employees as $employee)
    <li class="list-group-item">
      {{ $employee->name }}
      @if(count($employee->employees))
      @include('admin.employee.list_employee', $employees = $employee->employees);
      @endif
    </li>
    @endforeach
</ul>