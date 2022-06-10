<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {				
            if (Auth::guest()) {																									
                return redirect()->intended('login');	}
                else{
                    if( Auth::user()->is_admin){
                        return redirect()->intended('homeadmin');                        
                    }
                    return $next($request);
                    
                }
                
                       
        
    }
 
}

