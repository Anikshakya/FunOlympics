<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
class RestrictIpAddressMiddleware
{
    public $restrictedIp =['127.0.0.1','3334','77777'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
       
    public function handle(Request $request, Closure $next)
    {
      
      return $next($request);
    }
}
