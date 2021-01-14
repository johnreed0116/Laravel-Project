<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     * @param  int  $content_id
     * @return \Illuminate\Http\Response
     */
    public function add($content_id)
    {
        $content = Content::find($content_id);
        $images = DB::table('images')->where('content_id','=', $content_id)->get();

        return view('user.user_image_add', ['content' => $content, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  int  $content_id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $content_id)
    {
        $image = new Image();
        $image->title = $request->input('title');
        $image->content_id = $content_id;
        if($request->file('image')!=null) {
            $image->image = Storage::putFile('images', $request->file('image'));
        }
        $image->save();

        return redirect()->route('user_image_add', ['content_id' => $content_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Models\Image  $image
     */
    public function delete($id, $content_id)
    {
        $image = Image::find($id);
        $image->delete();
        $max = DB::table('images')->max('id') + 1;
        DB::statement("ALTER TABLE images AUTO_INCREMENT =  $max");

        return redirect()->route('user_image_add', ['content_id' => $content_id]);
    }
}
