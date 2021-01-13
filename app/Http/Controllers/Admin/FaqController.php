<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqlist = Faq::all();
        return view('admin.faq', ['faqlist' => $faqlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $faqlist = Faq::all();
        return view('admin.faq_add', ['faqlist' => $faqlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->position = $request->input('position');
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->status = $request->input('status');
        $faq->save();

        return redirect()->route('admin_faq');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $faqlist = Faq::all();

        return  view('admin.faq_edit', ['faq' => $faq, 'faqlist' => $faqlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq,$id)
    {
        $faq = Faq::find($id);
        $faq->position = $request->input('position');
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->status = $request->input('status');
        $faq->save();

        return redirect()->route('admin_faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function delete(Faq $faq, $id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        $max = DB::table('faqs')->max('id') + 1;
        DB::statement("ALTER TABLE faqs AUTO_INCREMENT =  $max");
        return redirect()->route('admin_faq');
    }
}
