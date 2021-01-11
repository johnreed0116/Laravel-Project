<?php

namespace App\Http\Controllers;

use App\Models\Content;
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
        return Menu::where('parent_id','=',0)->with('children')->get();
    }

    public static function getSetting(){
        return $setting = Setting::first();
    }

    public function index(){
        $setting = Setting::first();
        $slider = Content::select('id','title','description','image','slug')->limit(3)->get();
        $service = Service::select('id','title','description','image')->limit(6)->get();
        $content = Content::select('id','title','description','image','type','slug')->limit(6)->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
            'service'=>$service,
            'content'=>$content
        ];

        return view('home.index', $data);
    }

    public function content($id, $slug){
        $content = Content::find($id);
        $imagelist = Image::where('content_id',$id)->get();

        return view('home.content_detail', ['content' => $content, 'imagelist' => $imagelist]);
    }

    public function menucontent($id, $slug){
        $menucontent = Content::where('menu_id', $id)->get();
        $menu = Menu::find($id);

        return view('home.menu_content', ['menucontent'=>$menucontent, 'menu' => $menu]);
    }

    public function services(){
        $setting = Setting::first();
        $servicelist = Service::all();

        return view('home.services', ['setting'=>$setting, 'servicelist' => $servicelist]);
    }
    public function blog(){
        $menu = Menu::where('slug', 'blog')->first();
        $contentlist = Content::all();

        return view('home.blog', ['menu' => $menu, 'contentlist' => $contentlist]);
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
