<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;


class HomeController extends Controller
{

    public static function menuList(){
        return Menu::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){
        $setting = Setting::first();
        return view('home.index', ['setting'=>$setting]);
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
