<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Position;
use App\Agency;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public static $managers = array();

    protected $employee;

    public function __construct()
    {
        $this->employee = new Employees;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Danh sách nhân viên';
        $data = $this->employee->query()
                    ->name($request)
                    ->position($request)
                    ->agency($request)
                    ->mail($request);
        $employees = $data->paginate(10);
        $positions = Position::all()->pluck('name', 'id');
        $agencies = Agency::all()->pluck("name", "id");


        return view(EMPLOYEE_VIEW_INDEX, compact('title', 'employees', 'positions', 'agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Khởi tạo nhân viên';

        $managers = [];
        $positions = Position::all()->pluck('name', 'id');
        $agencies = Agency::all()->pluck("name", "id");
        return view(EMPLOYEE_VIEW_FORM, compact('title', 'managers', 'positions', 'agencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->employee->name = $request->input('name');
        $this->employee->position_id = $request->input('position_id');
        $this->employee->phone = $request->input('phone');
        $this->employee->mail = $request->input('mail');
        $this->employee->agency_id = $request->input('agency_id');
        $this->employee->manager_id = $request->input('manager_id');
        $this->employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Chi tiết nhân viên';
        $employees = Employees::where('manager_id', $id)->get();
        $manager = Employees::find($id);

        return view(EMPLOYEE_VIEW_DETAIL, compact('title', 'employees', 'manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Sửa thông tin nhân viên';
        $employee = $this->employee->find($id);
        $managers = Employees::all()->pluck("name", "id");
        $positions = Position::all()->pluck('name', 'id');
        $agencies = Agency::all()->pluck("name", "id");

        return view(EMPLOYEE_VIEW_FORM, compact('title', 'employee', 'managers', 'positions', 'agencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $employee = $this->employee->findOrFail($id);
        $employee->update($data);

        return redirect()->route('employee.index');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->employee->findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index');
    }

    public function getManagerByPosition(Request $request)
    {
        $position_id = $request->get('id');
        $position = Position::findOrFail($position_id);
        $suitablePositions = $this->RecursivePosition($position_id);
        $suitablemanagers = [];
        foreach ($suitablePositions as $index => $value  ) {
            $manager = Employees::where('position_id', $value)->pluck('id');
            $suitablemanagers = array_merge($suitablemanagers, $manager->toArray());
        }

        return response()->json($suitablemanagers);
    }

    public function getManagerByAgency(Request $request)
    {
        $agency_id = $request->get('id');
        $managers = $request->get('manager');
        $suitablemanagers = [];
        if (isset($managers)) {
            foreach ($managers as $id) {
                $manager = Employees::where('id', $id)->get();
                if (($manager[0]->agency_id) == $agency_id) {
                    $suitablemanagers = array_merge($suitablemanagers, $manager->toArray());
                }
            }
        }


        return response()->json($suitablemanagers);
    }

    public function RecursivePosition($id)
    {
        if ($id != 0) {
            $position = Position::findOrFail($id);
            if (!isset($position->manager)) {
                return static::$managers;
            }
            else {
                $manager = $position->manager->id;
                array_push(static::$managers, $manager);
                $id = $position->manager->id;
                $this->RecursivePosition($id);

            }
        }
        return static::$managers;
    }
}
