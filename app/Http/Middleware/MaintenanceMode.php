<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 
use App\Configuration;

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
        $configuration = Configuration::where('name', 'maintenance')->first();

        if ($configuration->value == 'on') {
            return redirect('/maintenance');
        } else {
            return $next($request);
        }
    }
}


