<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{

    public function handle($request, Closure $next)
    {
        
        $lang = $request->cookie('language');
        if (!empty($lang)) {
            App::setLocale($lang);
        }
        return $next($request);
        
    }
    
}