<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentlist = Content::all();
        return view('admin.content', ['contentlist' => $contentlist]);
    }

    /**
     * Add
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $menulist = Menu::all();

        return view('admin.content_add', ['menulist' => $menulist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Content();
        $content->menu_id = $request->input('menu_id');
        $content->user_id = Auth::id();
        $content->title = $request->input('title');
        $content->type = $request->input('type');
        $content->keywords = $request->input('keywords');
        $content->description = $request->input('description');
        $content->detail = $request->input('detail');
        $content->image = $request->input('image');
        $content->status = $request->input('status');
        $content->save();

        return redirect()->route('admin_content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id);
        $menulist = Menu::all();

        return  view('admin.content_edit', ['content' => $content, 'menulist' => $menulist]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        $content->menu_id = $request->input('menu_id');
        $content->user_id = Auth::id();
        $content->title = $request->input('title');
        $content->type = $request->input('type');
        $content->keywords = $request->input('keywords');
        $content->description = $request->input('description');
        $content->detail = $request->input('detail');
        $content->image = $request->input('image');
        $content->status = $request->input('status');
        $content->save();

        return redirect()->route('admin_content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $content = Content::find($id);
        $content->delete();

        return redirect()->route('admin_content');
    }
}
