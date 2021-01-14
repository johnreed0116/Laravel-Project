<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $contentlist = Content::where('user_id','=',Auth::id())->get();
        return view('user.user_content', ['setting'=>$setting, 'contentlist' => $contentlist]);
    }

    /**
     * Add
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $setting = Setting::first();
        $menulist = Menu::with('children')->get();

        return view('user.user_content_add', ['setting'=>$setting, 'menulist' => $menulist]);
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
        if($request->file('image')!=null) {
            $content->image = Storage::putFile('images', $request->file('image'));
        }
        $content->slug = $request->input('slug');
        $content->status = 'False';
        $content->save();

        return redirect()->route('user_content');
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
        $setting = Setting::first();
        $content = Content::find($id);
        $menulist = Menu::with('children')->get();

        return  view('user.user_content_edit', ['setting'=>$setting, 'content' => $content, 'menulist' => $menulist]);
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
        if($request->file('image')!=null) {
            $content->image = Storage::putFile('images', $request->file('image'));
        }
        $content->slug = $request->input('slug');
        $content->save();

        return redirect()->route('user_content');
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
        $maxId = DB::table('contents')->max('id') + 1;
        DB::statement("ALTER TABLE contents AUTO_INCREMENT =  $maxId");

        return redirect()->route('user_content');
    }
}
