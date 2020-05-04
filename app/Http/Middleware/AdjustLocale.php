<?php

namespace App\Http\Middleware;

use Closure;

class AdjustLocale
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

        $language = 'tr';
        if (session()->exists('language')) {
           $language=session('language');
        }
        app()->setLocale($language);
        return $next($request);
    }
}
