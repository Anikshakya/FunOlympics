<?php

namespace App\Http\Controllers\Front;
use App\Mail\ReplyMail;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\Models\Contact;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use Session;
use Illuminate\Support\Str;

class IndexController extends Controller
{

  public function index(Request  $request){


    if(Auth::check()){     
        if(auth()->user()->status==0){
        session()->flash('success','Please Verify Your Account First');
            return redirect()->route('verify.password');
        }else{
            return view('front.home.index');
        }
    }else{
        return view('front.home.index');

    }

  }

  public function watchLive(){
    return view('front.pages.watchLive');
  }

  public function video(){
    return view('front.pages.video');
  }

  public function contact(){
    return view('front.pages.contact');
  }

  public function verifyPassword(){
    if(Auth::user()->status==1){
      return redirect()->route('user.dashboard');
    }else{
    return view('front.user.verify');
    }
  }

  public function  verifyCode(request $request){
   
   $dataBasecode=Auth::user()->code;
   if($dataBasecode==$request->verify_code){
      DB::table('users')->where('id',auth()->user()->id)->update(['status'=>1]);
      session()->flash('success','Succesfully matched you code');
      return redirect()->route('index'); 
    }else{
      session()->flash('success','Provide code does not match');
      return redirect()->back();
    }
    
  
  }

  public function dashboard(){
 
    if(Auth::check()){
    if(auth()->user()->status == 1){
      return view('front.user.user_dashboard');
    }else{
      session()->flash('success','Please Verify Your Account First');
     return redirect()->route('verify.password');
    } 
    }else{
      session()->flash('success','Please Login  At First');
      return redirect()->back();
    }

  }

  public function changePasswordPage(){
    if(Auth::check()){
      return view('front.user.changePassword');
    }else{
      session()->flash('success','Sorry You cannot Access These Url');
      return redirect()->back();
    }
  }
  
  public function userProfile($id){
    if(Auth::check()){
      return view('front.user.changeProfile',compact('id'));
    }else{
      session()->flash('success','Sorry You cannot Access These Url');
        return redirect()->back();
    }
  }

  public function changeUserProfile(Request $request){
    $id=$request->id;
    User::find($id)->update([ 'name'=>$request->name,
                              'email' => $request->email,
                              'country' =>$request->country,
                              'phone_code' =>$request->phone_code
                            ]);
    session()->flash('success','User Information successfully Updated');     
    return redirect()->back();      
  }

  public function changePassword(Request $request){
      
    $request->validate([
      'current_password' => ['required', new MatchOldPassword],
      'new_password' => ['required'],
      'new_confirm_password' => ['same:new_password'],
    ]);
    User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
    session()->flash('success','Password change succesfully');
    return redirect()->back();
  }
    
  public function store(Request $request){

    DB::table('contactus')->insert([
        "name" =>$request->name,
        "email" =>$request->email,
        "subject"=>$request->subject,
        "message"=>$request->message,
  
    ]);
    session()->flash('success','Message sent successfully');
    return redirect()->back();
  }
    
  public function videoDetail($id){
   

    if(Auth::check()){

    if(Auth::user()->status==1){
        $video=Video::findorfail($id);
        return view('front.pages.videoDetail',compact('video'));
      }else{
        session()->flash('success','Please Verify Your Account to Access the Video');
        return redirect()->back();
      }
    }else{
      session()->flash('success','Please Login First');
      return redirect()->back();
   
    }
  }
}