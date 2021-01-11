<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $servicelist = Service::all();
        return view('admin.service', ['servicelist' => $servicelist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        $servicelist = Service::all();

        return view('admin.service_add', ['servicelist' => $servicelist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->file('image')!=null) {
            $service->image = Storage::putFile('images', $request->file('image'));
        }
        $service->status = $request->input('status');
        $service->save();

        return redirect()->route('admin_service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $servicelist = Service::all();

        return  view('admin.service_edit', ['service' => $service, 'servicelist' => $servicelist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if($request->file('image')!=null) {
            $service->image = Storage::putFile('images', $request->file('image'));
        }
        $service->status = $request->input('status');
        $service->save();

        return redirect()->route('admin_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('services')->where('id','=',$id)->delete();
        $max = DB::table('services')->max('id') + 1;
        DB::statement("ALTER TABLE services AUTO_INCREMENT =  $max");
        return redirect()->route('admin_service');
    }
}
