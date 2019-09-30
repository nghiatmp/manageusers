<?php

namespace App\Http\Middleware;

use Closure;

class checkComfirmadd
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
        if(null!=old()){
            return $next($request);
        }
        return redirect(route('admin.adduser'));
        
    }
}
