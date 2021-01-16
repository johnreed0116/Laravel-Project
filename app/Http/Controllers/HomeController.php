<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;


class HomeController extends Controller
{

    public static function menuList(){
        return Menu::where('parent_id','=',0)->with('children')->where('status','=','True')->get();
    }

    public static function getSetting(){
        return $setting = Setting::first();
    }

    public function index(){
        $setting = Setting::first();
        $slider = Content::select('id','title','description','image','slug')->limit(3)->get();
        $announcement = Content::where('type','=','Announcement')->where('status','=','True')->get();
        $news = Content::where('type','=','News')->where('status','=','True')->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'announcement'=>$announcement,
            'news'=>$news
        ];
        return view('home.index', $data);
    }

    public function content($id, $slug){
        $content = Content::where('status','=','True')->find($id);
        $imagelist = Image::where('content_id',$id)->get();
        $comment = Comment::where('content_id',$id)->where('status','=','True')->get();

        return view('home.content_detail', ['content' => $content, 'imagelist' => $imagelist, 'comment' => $comment]);
    }

    public function menucontent($id, $slug){
        $menucontent = Content::where('menu_id', $id)->where('status','=','True')->get();
        $menu = Menu::where('status','=','True')->find($id);

        return view('home.menu_content', ['menucontent'=>$menucontent, 'menu' => $menu]);
    }

    public function getcontent(Request $request){
        if ($request->input('search') != null) {
            $content = Content::where('title', $request->input('search'))->first();
            return redirect()->route('content', ['id' => $content->id, 'slug' => $content->slug]);
        } else {
            return back();
        }
    }

    public function faq(){
        $setting = Setting::first();
        $faqlist = Faq::all()->where('status','=','True')->sortBy('position');

        return view('home.faq', ['setting'=>$setting, 'faqlist' => $faqlist]);
    }

    public function aboutus(){
        $setting = Setting::first();
        return view('home.aboutus', ['setting'=>$setting]);
    }

    public function contact(){
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }

    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }

    public function sendmessage(Request $request){

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('contact')->with('success', 'Your message sent, Thank you.');
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request){

        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $setting = Setting::first();
        return redirect('/');
    }
}
