<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {


            if (Auth::guard($guard)->check()) {
                if($guard === 'admin'){
                    return redirect()->route('admin.dashboard');
                }elseif($guard === 'seller'){
                    return redirect()->to('/seller/dashboard');
                }else{
                    return redirect()->to('/home');
                }


            }
            // if($guard == 'seller'){
            //     return redirect()->to('seller/dashboard');
            //     if (Auth::guard($guard)->check()) {
            //         return redirect()->to('seller/dashboard');
            //     }
            // }elseif($guard == 'admin'){
            //     if (Auth::guard($guard)->check()) {
            //         return redirect()->to('admin/dashboard');
            //     }
            // }else{
            //     return redirect(RouteServiceProvider::HOME);
            // }
        }

        return $next($request);
    }
}
