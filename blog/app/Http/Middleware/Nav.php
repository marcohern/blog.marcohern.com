<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class Nav
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        View::share('nav_home', '');
        View::share('nav_about', '');
        View::share('nav_contact', '');
        $path = $request->route()->getPath();
        if      (preg_match('/^[a-z]{2}\/?$/', $path)) View::share('nav_home','current');
        else if (preg_match('/^[a-z]{2}\/about\/?$/', $path)) View::share('nav_about','current');
        else if (preg_match('/^[a-z]{2}\/contact\/?$/', $path)) View::share('nav_contact','current');
    
        return $next($request);
    }
}
