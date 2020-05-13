<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;
class Locale
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
        $locales = ['az','ru','en'];
        $lang = explode(",",$request->server('HTTP_ACCEPT_LANGUAGE'));
        if(session()->has('locale'))
            app()->setLocale(session()->get('locale'));
        else if(!session()->has('locale') && in_array($lang[0],$locales)){
            app()->setLocale($lang[0]);
        }
        else app()->setLocale('en');
        return $next($request);
    }
}
