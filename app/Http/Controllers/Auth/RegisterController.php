<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected function redirectTo()
    {
     
        session()->flash('success','you can login after verify by admin');
        return  '/';
    }

   


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

public function showRegistrationForm()
{
    return redirect(url('/'));
}


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    { 
        $randomNumber =  rand(100000,999999);
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),     
            'is_admin' => $data['is_admin'],
            'status' => $data['status'],
            'country' => $data['country'],
            'contact_number' => $data['contact_number'],
            'code'  => $randomNumber 
        ]);

        $data = array('code'=> $randomNumber,'email'=> $data['email']);
        Mail::send(['text'=>'mail'], $data, function($message) use($data) {
            $message->to($data['email'])->subject
               ('Verify Your Account');
            $message->from('nakarmirohan.test@gmail.com','Fun Olympics');
        });
        session()->flash('success',' You create an Account');
        return $user;
    }

}
