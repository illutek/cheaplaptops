<?php

namespace App\Http\Middleware;

use Closure;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if (auth()->check() and auth()->user()->admin) {
           return $next($request);
//        }
//
//        return redirect(route('store.index'));
    }
}