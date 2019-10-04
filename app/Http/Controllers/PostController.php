<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;

    public function __construct()
    {
        $this->post = new post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(PostRequest $request)
    {
        $title = __('common.list') . ' ' . __('common.post');
        $data = $this->post->query()
                    ->title($request)
                    ->category($request)
                    ->created($request);
        $posts = $data->get();
        $category = Category::where('type', TYPE_CATEGORY['news'])->pluck('title', 'id');
        return view(POST_VIEW_INDEX, compact('title', 'posts', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('common.add') . ' ' . __('common.post');
        $category = Category::where('type', TYPE_CATEGORY['news'])->pluck('title', 'id');

        return view(POST_VIEW_FORM, compact('title', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(postRequest $request)
    {
        $validate = $request->validate();
        $data = $request->all();
        if (is_null($validate)) {
            $this->post->title = $request->input('title');
            $this->post->slug = $request->input('slug');
            $this->post->content = $request->input('content');
            $this->post->category = $request->input('category');
            $this->post->summary = $request->input('summary');
            $this->post->status = $request->input('status');
            $this->post->save();
        }

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = __('post.content') . ' ' . __('common.post');
        $post = $this->post->find($id);

        return view(POST_VIEW_DETAIL, compact('post', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = __('common.edit') . ' ' . __('common.post');
        $post = $this->post->find($id);
        $category = Category::where('type', TYPE_CATEGORY['news'])->pluck('title', 'id');

        return view(POST_VIEW_FORM, compact('title', 'post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(postRequest $request, $id)
    {
        $data = $request->all();
        $validate = $request->validate();
        if (is_null($validate)) {
            $post = $this->post->findOrFail($id);
            $post->update($data);

            return redirect()->route('post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->post->findOrFail($id);
        $post->delete();

        return redirect()->route('post.index');
    }

    public function dropOrPublish($id, $status)
    {
        if ($status == '0') {
            $post = $this->post->where('id', $id)->update(array('status' => STATUS['public']));
        }
        else {
            $post = $this->post->where('id', $id)->update(array('status' => STATUS['draft']));
        }
        return redirect()->route('post.index');

    }
}
