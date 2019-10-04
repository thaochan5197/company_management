<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    protected $position;

    public function __construct()
    {
        $this->position = new position;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Danh sách chức vụ';

        $positions = $this->position->get();

        return view(POSITION_VIEW_INDEX, compact('title', 'positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Khởi tạo chức vụ';
        $positions = Position::all()->pluck('name', 'id');
        $positions->prepend('Cấp cao nhất', 0);

        return view(POSITION_VIEW_FORM, compact('title', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validate = $request->validates();
        // $data = $request->all();
        // if (is_null($validate)) {
            $array = [];
            $array['name'] = $request->input('name');
            $array['manager_id'] = $request->input('manager_id');
            // var_dump($array['name']);die;
            for ($count = 0; $count < count($array['name']); $count++) {
                $data = [];
                $data['name'] = $array['name'][$count];
                $data['manager_id'] = $array['manager_id'][$count];
                $this->position->insert($data);
            }
            // var_dump($positions);die;
            // $this->position->name = $request->input('name');
            // $this->position->manager_id = $request->input('manager_id');

            // $this->position->save();
        // }

        return redirect()->route('position.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Sửa thông tin chức vụ';
        $position = $this->position->find($id);

        return view(POSITION_VIEW_FORM, compact('title', 'position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $validate = $request->validate();
        // if (is_null($validate)) {
            $position = $this->position->findOrFail($id);
            $position->update($data);

            return redirect()->route('position.index');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = $this->position->findOrFail($id);
        $position->delete();

        return redirect()->route('position.index');
    }

    public function getPositionsAjax()
    {
        $positions = Position::all()->pluck('name', 'id');

        return response()->json($positions);
    }
}
