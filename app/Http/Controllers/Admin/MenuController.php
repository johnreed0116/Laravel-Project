<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{

    protected $appends = [
        'getParentsTree',
    ];

    public static function getParentsTree($menu, $title){
        if($menu->parent_id == 0){
            return $title;
        }
        $parent = Menu::find($menu->parent_id);
        $title = $parent->title . '>' . $title;
        return MenuController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menulist = Menu::with('children')->get();

        return view('admin.menu', ['menulist' => $menulist]);
    }

    /**
     * Add
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $menulist = Menu::with('children')->get();

        return view('admin.menu_add', ['menulist' => $menulist]);
    }

    /**
     * Create
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $menu = new Menu();
        $menu->parent_id = $request->input('parent_id');
        $menu->title = $request->input('title');
        $menu->keywords = $request->input('keywords');
        $menu->description = $request->input('description');
        if($request->file('image')!=null) {
            $menu->image = Storage::putFile('images', $request->file('image'));
        }
        $menu->slug = $request->input('slug');
        $menu->status = $request->input('status');
        $menu->save();

        return redirect()->route('admin_menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $menulist = Menu::with('children')->get();

        return  view('admin.menu_edit', ['menu' => $menu, 'menulist' => $menulist]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->parent_id = $request->input('parent_id');
        $menu->title = $request->input('title');
        $menu->keywords = $request->input('keywords');
        $menu->description = $request->input('description');
        if($request->file('image')!=null) {
            $menu->image = Storage::putFile('images', $request->file('image'));
        }
        $menu->slug = $request->input('slug');
        $menu->status = $request->input('status');
        $menu->save();

        return redirect()->route('admin_menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //DB::table('menus')->truncate();
        DB::table('menus')->where('id','=',$id)->delete();
        $max = DB::table('menus')->max('id') + 1;
        DB::statement("ALTER TABLE menus AUTO_INCREMENT =  $max");
        return redirect()->route('admin_menu');
    }
}
