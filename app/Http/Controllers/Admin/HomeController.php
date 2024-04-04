<?php

namespace App\Http\Controllers\Admin;

  
use Carbon\Carbon;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    public function index(){

     return view('admin.index');     
    }

    public function deleteEnquiry($id){
        DB::table('enquiries')->where('id',$id)->delete();
        session()->flash('success','Deleted sucesfully');
        return redirect()->back();
    }

    

    public function show()
    {   
      return view('admin.profile.index')->with('user',auth()->user());    //
    }

    public function changeprofile()
    {
     return view('admin.profile.edit')->with('user',auth()->user());//
    }



    public function updateprofile(Request $request,User $user)
       {

        $user->name=$request->name;
        $user->email=$request->email;
        $user->number=$request->phone;
        $user->company_name=$request->company_name;
        $user->save();
        $address = Address::where('user_id',$user->id)->first();
        $address->city=$request->city;
        $address->street=$request->street;
        $address->country=$request->country;
        $address->postal_code=$request->postal_code;
        $address->save();

        session()->flash('success','User information updated sucesfully updated');
        return redirect()->back();

    }
      
    public function event_index(){
     
        $events=Db::table('events')->cursor();
        return view('admin.booking_event.index',compact('events'));
    }

    public function event_destroy($id){
     
        $event=Db::table('events')->where('id',$id)->delete();
        session()->flash('success','Event Deleted Succesfully');
        return redirect()->back();
    }

    public function enquiry(){
      return view('admin.contact.enquiry');
    }

    public function contactAdmin(){
      return view('admin.contact.contact');
    }

    //
}
