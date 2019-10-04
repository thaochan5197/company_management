<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Http\Requests\AgencyRequest;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    protected $agency;

    public function __construct()
    {
        $this->agency = new Agency;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Danh sách chi nhánh';
        $agencies = $this->agency->get();

        return view(PAGE_VIEW_INDEX, compact('title', 'agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Khởi tạo chi nhánh';

        return view(PAGE_VIEW_FORM, compact('title'));
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
            $this->agency->name = $request->input('name');
            $this->agency->mail = $request->input('mail');
            $this->agency->phone = $request->input('phone');
            $this->agency->address = $request->input('address');
            $this->agency->save();
        // }

        return redirect()->route('agency.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Sửa thông tin chi nhánh';
        $agency = $this->agency->find($id);

        return view(PAGE_VIEW_FORM, compact('title', 'agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $validate = $request->validate();
        // if (is_null($validate)) {
            $agency = $this->agency->findOrFail($id);
            $agency->update($data);

            return redirect()->route('agency.index');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency = $this->agency->findOrFail($id);
        $agency->delete();

        return redirect()->route('agency.index');
    }
}
