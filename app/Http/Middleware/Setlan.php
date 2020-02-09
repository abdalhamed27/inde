<?php

namespace App\Http\Middleware;

use Closure;
class Setlan
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

        if (\Session::has('locale')) {
            app()->setLocale(\session::get('locale'));
        }
        return $next($request);
    }
}