<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::check()){
          /**  if(auth()->user()->is_admin=="a" || auth()->user()->is_admin=="s" && auth()->user()->status=="1" ){
               
                return $next($request);
            }else{
        return redirect(url('/'))->with("success","After verifying you can succesfully login.");
            }**/

        }
       
        return $next($request);



    }
}
