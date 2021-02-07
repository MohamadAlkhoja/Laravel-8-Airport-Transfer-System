<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeeController extends Controller
{

    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }
    //
    public  function  index()
    {
        $setting=Setting::first();
        $slider=Transfer::select('id','title','image','slug','description')->limit(4)->get();

        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>'home'

        ];

        return view('home.index',$data);
    }
    public function transfer($id,$slug){
        $setting=Setting::first();
        $data=Transfer::find($id);
        $picked=Transfer::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        $reviews=Transfer::where('transfer_id',$id)->get();
        $datalist=Image::where('transfer_id',$id)->get();
        return view('home.transfer_detail',['setting'=>$setting,'picked'=>$picked,'data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }

    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();

        return redirect()->route('contact')->with('info','Your Message sent successfully!');
    }

    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function faq()
    {
        return view('home.about');
    }
    public function categorytransfers($id,$slug){
        $setting=Setting::first();
        $datalist=Transfer::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_services',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);

    }

    public  function  login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return  back()->withErrors([
                'email' => 'the provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
