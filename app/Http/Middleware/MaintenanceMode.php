<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 

class MaintenanceMode
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
        if (Auth::check()) {
            return redirect('/maintenance')
        } else {
            return redirect('/login'); 
        }
    }
}
