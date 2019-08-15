<?php

namespace App\Http\Controllers;

use App\Page;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $page;

    public function __construct()
    {
        $this->page = new page;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $title = __('common.list') . ' ' . __('common.page');
        $pages = $this->page->orderBy('order')->get();

        return view(PAGE_VIEW_INDEX, compact('title', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('common.add') . ' ' . __('common.page');

        return view(PAGE_VIEW_FORM, compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $validate = $request->validate();
        $data = $request->all();
        if (is_null($validate)) {
            $this->page->title = $request->title;
            $this->page->slug = $request->slug;
            $this->page->content = $request->content;
            $this->page->order = $request->order;
            $this->page->status = $request->status;
            $this->page->save();
        }

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = __('page.content') . ' ' . __('common.page');
        $page = $this->page->find($id);

        return view(PAGE_VIEW_DETAIL, compact('page', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = __('common.edit') . ' ' . __('common.page');
        $page = $this->page->find($id);

        return view(PAGE_VIEW_FORM, compact('title', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        $data = $request->all();
        $validate = $request->validate();
        // var_dump($data);die;
        if (is_null($validate)) {
            $page = $this->page->findOrFail($id);
            $page->update($data);

            return redirect()->route('page.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->page->findOrFail($id);
        $page->delete();

        return redirect()->route('page.index');
    }
}
